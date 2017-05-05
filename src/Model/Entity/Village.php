<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Village Entity
 *
 * @property int $id
 * @property int $district_id
 * @property int $block_id
 * @property string $village_name
 * @property string $latitude
 * @property string $longitude
 * @property string $executive_engineer
 * @property string $assistant_engineer
 * @property string $junior_engineer
 * @property string $operator
 * @property string $customer_care_no
 * @property string $department_site_serveyor
 * @property string $watermate_site_serveyor
 * @property \Cake\I18n\Time $start_of_work
 * @property \Cake\I18n\Time $complete_of_work
 * @property string $monitoring_format
 * @property string $land_allocation
 * @property \Cake\I18n\Time $water_connection
 * @property \Cake\I18n\Time $electrical_connection
 * @property \Cake\I18n\Time $foundation
 * @property \Cake\I18n\Time $flooring
 * @property \Cake\I18n\Time $shelter_erection
 * @property \Cake\I18n\Time $water_tank
 * @property \Cake\I18n\Time $plant_installation
 * @property \Cake\I18n\Time $commissioning
 * @property string $mla_costituency
 * @property string $gram_panchayat
 * @property string $population
 * @property int $no_houses
 * @property string $sim_number
 * @property int $village_flag
 * @property string $ifr
 *
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Block $block
 * @property \App\Model\Entity\Record[] $records
 */
class Village extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
