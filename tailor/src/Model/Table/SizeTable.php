<?php
namespace App\Model\Table;

use App\Model\Entity\Size;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Size Model
 *
 */
class SizeTable extends Table
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

        $this->table('size');
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
            ->integer('designID')
            ->requirePresence('designID', 'create')
            ->notEmpty('designID');

        $validator
            ->integer('userID')
            ->requirePresence('userID', 'create')
            ->notEmpty('userID');

        $validator
            ->integer('shouderLength')
            ->requirePresence('shouderLength', 'create')
            ->notEmpty('shouderLength');

        $validator
            ->integer('waist')
            ->requirePresence('waist', 'create')
            ->notEmpty('waist');

        $validator
            ->integer('sleeveLength')
            ->requirePresence('sleeveLength', 'create')
            ->notEmpty('sleeveLength');

        $validator
            ->integer('bottomWidth')
            ->requirePresence('bottomWidth', 'create')
            ->notEmpty('bottomWidth');

        $validator
            ->integer('sleeveWidth')
            ->requirePresence('sleeveWidth', 'create')
            ->notEmpty('sleeveWidth');

        $validator
            ->integer('totalLength')
            ->requirePresence('totalLength', 'create')
            ->notEmpty('totalLength');

        $validator
            ->integer('chest')
            ->requirePresence('chest', 'create')
            ->notEmpty('chest');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        return $validator;
    }
}
