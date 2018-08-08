<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\EnrolmentsTable|\Cake\ORM\Association\HasMany $Enrolments
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->belongsToMany('Files', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'files_users'
        ]);
        $this->addBehavior('Search.Search');

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Enrolments', [
            'foreignKey' => 'user_id'
        ]);


        $this->searchManager()
            ->value('id')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('Search', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['given_name', 'last_name', 'email']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
/*    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->dateTime('entered')
            ->allowEmpty('entered');

        $validator
            ->integer('entered_user')
            ->allowEmpty('entered_user');

        $validator
            ->dateTime('last_updated')
            ->allowEmpty('last_updated');

        $validator
            ->integer('last_updated_user')
            ->allowEmpty('last_updated_user');

        $validator
            ->scalar('given_name')
            ->maxLength('given_name', 40)
            ->allowEmpty('given_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 20)
            ->allowEmpty('last_name');

        $validator
            ->date('dob')
            ->allowEmpty('dob');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('password')
            ->lengthBetween('password',[6,10])
            ->allowEmpty('password');

        $validator
            ->requirePresence('confirm_password', 'create', 'Password must be required!')
            ->notEmpty('confirm_password', 'Confirm password must be required!')
            ->add(
                'confirm_password',
                'custom',
                [
                    'rule' => function ($value, $context) {
                        if (isset($context['data']['password']) && $value == $context['data']['password']) {
                            return true;
                        }
                        return false;
                    },
                    'message' => 'Sorry, password and confirm password does not matched'
                ]
            );

        $validator
            ->integer('mobile')
            ->lengthBetween('mobile',[10,10])
            ->allowEmpty('mobile');

        $validator
            ->integer('postcode')
            ->lengthBetween('postcode',[4,4])
            ->allowEmpty('postcode');

        return $validator;
    }
*/
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));


        return $rules;
    }
}
