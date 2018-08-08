<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Mailer\MailerAwareTrait;
use Cake\Utility\Text;
use Cake\Utility\Security;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    use MailerAwareTrait;

    public function isAuthorized($user)
    {

        // Prior to 3.4.0 $this->request->param('action') was used.
        if ($this->request->getParam('action') === 'view') {
            return true;
        }


        return parent::isAuthorized($user);
    }

    public function index()
    {
        /*$users = $this->paginate($this->Users);
       $a='hello word';
//      $this->set(['name'=>$a]);
        $this->set([
            'users'=> $users,
            'name'=>$a
        ]);*/

        $this->viewBuilder()->setLayout('admin');

        $query = $this->Users
            // Use the plugins 'search' custom finder and pass in the
            // processed query params
            ->find('search', ['search' => $this->request->getQueryParams()])
            // You can add extra things to the query if you need to
            ->contain(['Files'])
            ->where(['given_name IS NOT' => null]);

        $this->set('users', $this->paginate($query));

    }

    public function adminIndex()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    public function view()
    {
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id, [
            'contain' => ['Enrolments', 'Files']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $user = $this->Users->newEntity();
        $user->entered = Time::now();
        $user->last_updated = Time::now();
        $user->entered_user = 1;
        $user->status = 1;
        $user->account_type = 'customer';
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $user = $this->Users->get($id, [
            'contain' => ['Enrolments', 'Files']
        ]);
        $this->set('user', $user);

        $file = $this->Users->Files->find('list');
        $this->set('file', $file);


        $user->last_updated = Time::now();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData(), [
                'associated' => ['Files']
            ]);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function softdelete($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if ($this->Auth->user('status') == 1) {
                $user->set('status', '3');
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been deactivated.'));

                    return $this->redirect(['action' => 'index']);
                }
            }else {
                $this->Flash->error(__('The user is already inactive'));
            }
        }
            else{
                $this->Flash->error(__('The user could not be deactivated. Please, try again.'));
            }

    }

    //Login
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $type = $this->Auth->user('account_type');
                if ($this->Auth->user('status') == 1) {
                    // User is active
                    if ($type === 'admin') {
                        //Admin Redirect
                        $this->redirect('/users/index');
                    } else {
                        //User Redirect
                        $this->redirect('/users/view');
                    }
                } else if ($this->Auth->user('status') == 3) {
                    // User is inactive
                    $this->Flash->error('User Account is Locked, please contact us');
                    //$this->Auth->setUser($user);
                    //return $this->redirect($this->Auth->redirectUrl());
                } else {
                    //bad login
                    $this->Flash->error('Incorrect Login');
                }
            }
        }
    }

    //Logout
    public function logout(){
        $this->Flash->success('You are logged out');
        return $this->redirect($this->Auth->logout());
    }

    //Register
    public function register()
    {
        $user = $this->Users->newEntity();
        $user->entered = Time::now();
        $user->last_updated = Time::now();
        $user->entered_user = 1;
        $user->status = 1;
        $user->account_type = 'customer';

        if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->data);
                if ($this->Users->save($user)) {
                    $this->Flash->success('You are registered and can now login');
                    return $this->redirect(['action' => 'login']);
                }
               else {
                   $this->Flash->error('This email address is already registered, please use a new email address.');
               }
            }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

/*
    public function search($params) {
        $users = TableRegistry::get('Users')->find();
        // Start a new query.
        $query = $users
            ->find()
            ->select(['given_name', 'last_name'])
            ->where(['given_name = ' => $params])
            ->all();

        foreach ($query as $user) {
            debug($user->id);
        }
    }*/




    public function forgotPassword()
    {
        if ($this->request->is('post'))
        {
            if (!empty($this->request->data))
            {
                $email = $this->request->data['email'];
                $user = $this->Users->findByEmail($email)->first();

                if (!empty($user))
                {
                    $password = sha1(Text::uuid());

                    $password_token = Security::hash($password, 'sha256', true);

                    $hashval = sha1($user->username . rand(0, 100));

                    $user->password_reset_token = $password_token;
                    $user->hashval = $hashval;

                    $reset_token_link = Router::url(['controller' => 'Users', 'action' => 'resetPassword'], TRUE) . '/' . $password_token . '#' . $hashval;

                    $emaildata = [$user->email, $reset_token_link];
                    $this->getMailer('SendEmail')->send('forgotPasswordEmail', [$emaildata]);

                    $this->Users->save($user);
                    $this->Flash->success('Please click on password reset link, sent in your email address to reset password.');

                }
                else
                {
                    $this->Flash->error('Sorry! Email address is not available here.');
                }
            }
        }
    }

    public function resetPassword($token = null) {
        if (!empty($token)) {

            $user = $this->Users->findByPasswordResetToken($token)->first();

            if ($user) {

                if (!empty($this->request->data)) {
                    $user = $this->Users->patchEntity($user, [
                        'password' => $this->request->data['password']
                    ]
                    );

                    $hashval_new = sha1($user->username . rand(0, 100));
                    $user->password_reset_token = $hashval_new;

                    if ($this->Users->save($user)) {
                        $this->Flash->success('Your password has been changed successfully');
                        $this->redirect(['action' => 'view']);
                    } else {
                        $this->Flash->error('Error changing password. Please try again!');
                    }
                }
            } else {
                $this->Flash->error('Sorry your password token has been expired.');
            }
        } else {
            $this->Flash->error('Error loading password reset.');
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function myresources($id = null)
    {
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id, [
            'contain' => ['Enrolments', 'Files']
        ]);
        $this->set('user', $user);


        $file = $this->Users->Files->find('list');
        $this->set('file', $file);



        $this->set(compact('user'));
    }

    public function beforeFilter(Event $event)
    {
        //redirect to different pages based on user group
        /*$user = $this->Auth->user('account_type');
        if($user === 'admin') {
            //Admin Redirect
            $redirectController = $this;
            $redirectMethod = 'admin_index';
        } elseif ($user === 'customer') {
            //User Redirect
            $redirectController = $this;
            $redirectMethod = 'index';
        } else {
            //Not logged in
            $redirectController = $this;
            $redirectMethod = 'login';
        }

        $this->Auth->unauthorizedRedirect = array(
            'controller' => $redirectController,
            'action' => $redirectMethod
        );*/
        $this->Auth->allow(['register.ctp']);
        $this->Auth->allow(['logout']);
//        $this->Auth->allow(['customerIndex']);
        $this->Auth->allow(['forgotPassword']);
        $this->Auth->allow(['resetPassword']);
        $this->Auth->allow(['myresources']);
    }

}
