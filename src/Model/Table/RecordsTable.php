<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Records Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Villages
 * @property \Cake\ORM\Association\BelongsTo $Districts
 * @property \Cake\ORM\Association\BelongsTo $Blocks
 *
 * @method \App\Model\Entity\Record get($primaryKey, $options = [])
 * @method \App\Model\Entity\Record newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Record[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Record|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Record patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Record[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Record findOrCreate($search, callable $callback = null, $options = [])
 */
class RecordsTable extends Table
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

        $this->setTable('records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Villages', [
            'foreignKey' => 'village_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id',
            'joinType' => 'INNER'
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
            ->integer('atmcard_issues')
            ->requirePresence('atmcard_issues', 'create')
            ->notEmpty('atmcard_issues');

        $validator
            ->date('date_lab_testing')
            ->requirePresence('date_lab_testing', 'create')
            ->notEmpty('date_lab_testing');

        $validator
            ->requirePresence('rwq_tds', 'create')
            ->notEmpty('rwq_tds');

        $validator
            ->requirePresence('rwq_fl', 'create')
            ->notEmpty('rwq_fl');

        $validator
            ->requirePresence('rwq_no', 'create')
            ->notEmpty('rwq_no');

        $validator
            ->requirePresence('twq_tds', 'create')
            ->notEmpty('twq_tds');

        $validator
            ->requirePresence('twq_fl', 'create')
            ->notEmpty('twq_fl');

        $validator
            ->requirePresence('twq_no', 'create')
            ->notEmpty('twq_no');

        $validator
            ->requirePresence('sim_number', 'create')
            ->notEmpty('sim_number');

        $validator
            ->date('status_date')
            ->requirePresence('status_date', 'create')
            ->notEmpty('status_date');

        $validator
            ->requirePresence('status_time', 'create')
            ->notEmpty('status_time');

        $validator
            ->requirePresence('status_plant', 'create')
            ->notEmpty('status_plant');

        $validator
            ->date('last_opr_date')
            ->requirePresence('last_opr_date', 'create')
            ->notEmpty('last_opr_date');

        $validator
            ->requirePresence('reason_nonoperational', 'create')
            ->notEmpty('reason_nonoperational');

        $validator
            ->requirePresence('treated_tds', 'create')
            ->notEmpty('treated_tds');

        $validator
            ->requirePresence('ifr', 'create')
            ->notEmpty('ifr');

        $validator
            ->requirePresence('pfr', 'create')
            ->notEmpty('pfr');

        $validator
            ->requirePresence('recovery', 'create')
            ->notEmpty('recovery');

        $validator
            ->requirePresence('operational_day', 'create')
            ->notEmpty('operational_day');

       /*  $validator
            ->requirePresence('operational_date', 'create')
            ->notEmpty('operational_date');
 */
        $validator
            ->requirePresence('dispense_day', 'create')
            ->notEmpty('dispense_day');

        $validator
            ->requirePresence('dispense_date', 'create')
            ->notEmpty('dispense_date');

        $validator
            ->requirePresence('penetration_atm', 'create')
            ->notEmpty('penetration_atm');

        $validator
            ->requirePresence('penetration_volume', 'create')
            ->notEmpty('penetration_volume');

      /*   $validator
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        $validator
            ->integer('record_flag')
            ->requirePresence('record_flag', 'create')
            ->notEmpty('record_flag');
 */
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
        $rules->add($rules->existsIn(['village_id'], 'Villages'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));
        $rules->add($rules->existsIn(['block_id'], 'Blocks'));

        return $rules;
    }
}
