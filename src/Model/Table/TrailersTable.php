<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trailers Model
 *
 * @property \App\Model\Table\DriversTable&\Cake\ORM\Association\BelongsTo $Drivers
 * @property &\Cake\ORM\Association\HasMany $Bays
 * @property &\Cake\ORM\Association\HasMany $Orders
 *
 * @method \App\Model\Entity\Trailer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trailer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trailer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trailer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trailer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trailer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trailer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trailer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrailersTable extends Table
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

        $this->setTable('trailers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Drivers', [
            'className' => 'Users',
            'foreignKey' => 'driver_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Bays', [
            'foreignKey' => 'trailer_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'trailer_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('trailer_number')
            ->requirePresence('trailer_number', 'create')
            ->notEmptyString('trailer_number');

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
        $rules->add($rules->existsIn(['driver_id'], 'Drivers'));

        return $rules;
    }
}
