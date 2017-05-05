<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Villages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Districts
 * @property \Cake\ORM\Association\BelongsTo $Blocks
 * @property \Cake\ORM\Association\HasMany $Records
 *
 * @method \App\Model\Entity\Village get($primaryKey, $options = [])
 * @method \App\Model\Entity\Village newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Village[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Village|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Village patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Village[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Village findOrCreate($search, callable $callback = null, $options = [])
 */
class VillagesTable extends Table
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

        $this->setTable('villages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            
        ]);
        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id',
           
        ]);
        $this->hasMany('Records', [
            'foreignKey' => 'village_id'
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
            ->requirePresence('village_name', 'create')
            ->notEmpty('village_name');

        $validator
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

        $validator
            ->requirePresence('executive_engineer', 'create')
            ->notEmpty('executive_engineer');

        $validator
            ->requirePresence('assistant_engineer', 'create')
            ->notEmpty('assistant_engineer');

        $validator
            ->requirePresence('junior_engineer', 'create')
            ->notEmpty('junior_engineer');

        $validator
            ->requirePresence('operator', 'create')
            ->notEmpty('operator');

        $validator
            ->requirePresence('customer_care_no', 'create')
            ->notEmpty('customer_care_no');

        $validator
            ->requirePresence('department_site_serveyor', 'create')
            ->notEmpty('department_site_serveyor');

        $validator
            ->requirePresence('watermate_site_serveyor', 'create')
            ->notEmpty('watermate_site_serveyor');

        $validator
            ->date('start_of_work')
            ->requirePresence('start_of_work', 'create')
            ->notEmpty('start_of_work');

        $validator
            ->date('complete_of_work')
            ->requirePresence('complete_of_work', 'create')
            ->notEmpty('complete_of_work');

        $validator
            ->requirePresence('monitoring_format', 'create')
            ->notEmpty('monitoring_format');

        $validator
            ->requirePresence('land_allocation', 'create')
            ->notEmpty('land_allocation');

        $validator
            ->date('water_connection')
            ->requirePresence('water_connection', 'create')
            ->notEmpty('water_connection');

        $validator
            ->date('electrical_connection')
            ->requirePresence('electrical_connection', 'create')
            ->notEmpty('electrical_connection');

        $validator
            ->date('foundation')
            ->requirePresence('foundation', 'create')
            ->notEmpty('foundation');

        $validator
            ->date('flooring')
            ->requirePresence('flooring', 'create')
            ->notEmpty('flooring');

        $validator
            ->date('shelter_erection')
            ->requirePresence('shelter_erection', 'create')
            ->notEmpty('shelter_erection');

        $validator
            ->date('water_tank')
            ->requirePresence('water_tank', 'create')
            ->notEmpty('water_tank');

        $validator
            ->date('plant_installation')
            ->requirePresence('plant_installation', 'create')
            ->notEmpty('plant_installation');

        $validator
            ->date('commissioning')
            ->requirePresence('commissioning', 'create')
            ->notEmpty('commissioning');

        $validator
            ->requirePresence('mla_costituency', 'create')
            ->notEmpty('mla_costituency');

        $validator
            ->requirePresence('gram_panchayat', 'create')
            ->notEmpty('gram_panchayat');

        $validator
            ->requirePresence('population', 'create')
            ->notEmpty('population');

        $validator
            ->integer('no_houses')
            ->requirePresence('no_houses', 'create')
            ->notEmpty('no_houses');

        $validator
            ->requirePresence('sim_number', 'create')
            ->notEmpty('sim_number');

       /* $validator
            ->integer('village_flag')
            ->requirePresence('village_flag', 'create')
            ->notEmpty('village_flag');
*/
        $validator
            ->requirePresence('ifr', 'create')
            ->notEmpty('ifr');

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
        $rules->add($rules->existsIn(['district_id'], 'Districts'));
        $rules->add($rules->existsIn(['block_id'], 'Blocks'));

        return $rules;
    }
}
