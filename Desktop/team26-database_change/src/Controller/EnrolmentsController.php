<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enrolments Controller
 *
 * @property \App\Model\Table\EnrolmentsTable $Enrolments
 *
 * @method \App\Model\Entity\Enrolment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnrolmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'contain' => ['Users', 'Courses']
        ];
        $enrolments = $this->paginate($this->Enrolments);

        $this->set(compact('enrolments'));
    }

    /**
     * View method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $enrolment = $this->Enrolments->get($id, [
            'contain' => ['Users', 'Courses']
        ]);

        $this->set('enrolment', $enrolment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $enrolment = $this->Enrolments->newEntity();
        if ($this->request->is('post')) {
            $enrolment = $this->Enrolments->patchEntity($enrolment, $this->request->getData());
            if ($this->Enrolments->save($enrolment)) {
                $this->Flash->success(__('The enrolment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrolment could not be saved. Please, try again.'));
        }
        $users = $this->Enrolments->Users->find('list', ['limit' => 200]);
        $courses = $this->Enrolments->Courses->find('list', ['limit' => 200]);
        $this->set(compact('enrolment', 'users', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $enrolment = $this->Enrolments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enrolment = $this->Enrolments->patchEntity($enrolment, $this->request->getData());
            if ($this->Enrolments->save($enrolment)) {
                $this->Flash->success(__('The enrolment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrolment could not be saved. Please, try again.'));
        }
        $users = $this->Enrolments->Users->find('list', ['limit' => 200]);
        $courses = $this->Enrolments->Courses->find('list', ['limit' => 200]);
        $this->set(compact('enrolment', 'users', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enrolment = $this->Enrolments->get($id);
        if ($this->Enrolments->delete($enrolment)) {
            $this->Flash->success(__('The enrolment has been deleted.'));
        } else {
            $this->Flash->error(__('The enrolment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
