<?php
namespace App\Model\Table;

use App\Model\Entity\Order;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Order Model
 *
 */
class OrderTable extends Table
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

        $this->table('order');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('referenceNumber', 'create')
            ->notEmpty('referenceNumber');

        $validator
            ->integer('userID')
            ->requirePresence('userID', 'create')
            ->notEmpty('userID');

        $validator
            ->integer('DesignID')
            ->requirePresence('DesignID', 'create')
            ->notEmpty('DesignID');

        $validator
            ->date('createdAt')
            ->requirePresence('createdAt', 'create')
            ->notEmpty('createdAt');

        $validator
            ->date('updatedAt')
            ->requirePresence('updatedAt', 'create')
            ->notEmpty('updatedAt');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        return $validator;
    }
}
