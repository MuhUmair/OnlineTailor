<?php
namespace App\Model\Table;

use App\Model\Entity\Profile;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profile Model
 *
 */
class ProfileTable extends Table
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

        $this->table('profile');
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
            ->requirePresence('detail', 'create')
            ->notEmpty('detail');

        $validator
            ->numeric('ratingAvg')
            ->requirePresence('ratingAvg', 'create')
            ->notEmpty('ratingAvg');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->integer('memberType')
            ->requirePresence('memberType', 'create')
            ->notEmpty('memberType');

        $validator
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->integer('happyCustomerCount')
            ->requirePresence('happyCustomerCount', 'create')
            ->notEmpty('happyCustomerCount');

        $validator
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->requirePresence('glong', 'create')
            ->notEmpty('glong');

        return $validator;
    }
}
