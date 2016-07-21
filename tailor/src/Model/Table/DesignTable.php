<?php
namespace App\Model\Table;

use App\Model\Entity\Design;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Design Model
 *
 */
class DesignTable extends Table
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

        $this->table('design');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Designtype', [
            'foreignKey' => 'id',
            
        ]);
        $this->hasOne('Designimage', [
            'foreignKey' => 'design_ID'
            
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => false,
            'queryBuilder' => function ($q) {
                return $q->where(["Design.User_id" => "User.id"]); // Full conditions for filtering
            }
            
        ]);
        $this->belongsTo('Profile', [
            'foreignKey' => false,
            'queryBuilder' => function ($q) {
                return $q->where(["Profile.User_id" => "Design.User_id"]); // Full conditions for filtering
            }
            
        ]);
    }

    public function findGetDesigns(Query $query){
        return   $q = $query->select(
            [
                'design.id',
                'design.designName',
                'design.designName',
                'design.description',
                'design.fabricName',
                'design.designType_ID',
                'design.status',
                'design.price',
                'dt.name',
                'u.fName',
                'u.lName',
                'di.id',
                'di.img'
            ]
        )
        ->join([
            'dt'=>[
            'table'=>'designtype',
            'type'=>'inner',
            'conditions'=>['design.designType_ID=dt.id' ]
            ],
            'u'=>[
            'table'=>'user',
            'type'=>'inner',
            'conditions'=>['u.id=design.user_id' ]
            ],
            'di'=>[
            'table'=>'designimage',
            'type'=>'inner',
            'conditions'=>['di.design_ID=design.id' ]
            ]
        ]);
        
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
            ->integer('tailorID')
            ->requirePresence('tailorID', 'create')
            ->notEmpty('tailorID');

        $validator
            ->requirePresence('designName', 'create')
            ->notEmpty('designName');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('fabricName', 'create')
            ->notEmpty('fabricName');

        $validator
            ->integer('designTypeID')
            ->requirePresence('designTypeID', 'create')
            ->notEmpty('designTypeID');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('ratingCount');
            
        $validator
            ->integer('totalRating');
        
        $validator
            ->integer('avrRating');
        
        return $validator;
    }
}
