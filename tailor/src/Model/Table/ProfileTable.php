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
        $this->belongsTo('users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->addBehavior('Utils.Uploadable', [
            'avatar' => [                                                    //field_name of form input
                   'field' => 'id',                                          //Any field from form (id=5)
                   'path' => '{ROOT}{DS}{WEBROOT}{DS}uploads{DS}',           // Set path to webroot
                   'fileName' => '{field}.{extension}'                       // File name with extension
                   ],
                ]
           );
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
            ->requirePresence('avatar', 'create')
            ;
        
        $validator
            ->requirePresence('glong', 'create')
            ->notEmpty('glong');

        return $validator;
    }
}
