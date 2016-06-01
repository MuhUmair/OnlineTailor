<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Profile', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]); 
        $this->belongsTo('Design', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);
        
    }
    public function findGetUsers(Query $query){
        return $q = $query->select([                
            ])->contain(["Profile"]);
    }
    
    public function findGetUserByID(Query $query, $options){
        return $q = $query->select([                
            ])->where(["user.id" => $options['user_id']])
            ->contain(["Profile"]);
    }
    public function findGetByTypeID(Query $query, $options){
       return $q = $query->select([                
            ])->where(["user.id" => $options['userType']])
            ->contain(["Profile"]);
    }
    
    
    

     /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('fName', 'create')
            ->notEmpty('fName');

        $validator
            ->requirePresence('lName', 'create')
            ->notEmpty('lName');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->allowEmpty('phone');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('country');

        $validator
            ->boolean('isNews')
            ->allowEmpty('isNews');

        $validator
            ->integer('userType')
            ->requirePresence('userType', 'create')
            ->notEmpty('userType')
            ->add('userType', 'inList', [
                'rule' => ['inList', ['1', '2']],
                'message' => 'Please enter a valid role'
            ]);

        return $validator;
    }

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
