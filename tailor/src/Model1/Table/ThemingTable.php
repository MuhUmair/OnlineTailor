<?php
namespace App\Model\Table;

use App\Model\Entity\Theming;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Theming Model
 *
 */
class ThemingTable extends Table
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

        $this->table('theming');
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
            ->requirePresence('main', 'create')
            ->notEmpty('main');

        $validator
            ->requirePresence('bg1', 'create')
            ->notEmpty('bg1');

        $validator
            ->requirePresence('bg2', 'create')
            ->notEmpty('bg2');

        $validator
            ->requirePresence('color1', 'create')
            ->notEmpty('color1');

        $validator
            ->requirePresence('color2', 'create')
            ->notEmpty('color2');

        $validator
            ->requirePresence('color3', 'create')
            ->notEmpty('color3');

        return $validator;
    }
}
