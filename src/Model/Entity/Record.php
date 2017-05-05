<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property int $id
 * @property int $village_id
 * @property int $atmcard_issues
 * @property \Cake\I18n\Time $date_lab_testing
 * @property string $rwq_tds
 * @property string $rwq_fl
 * @property string $rwq_no
 * @property string $twq_tds
 * @property string $twq_fl
 * @property string $twq_no
 * @property string $sim_number
 * @property \Cake\I18n\Time $status_date
 * @property string $status_time
 * @property string $status_plant
 * @property \Cake\I18n\Time $last_opr_date
 * @property string $reason_nonoperational
 * @property string $treated_tds
 * @property string $ifr
 * @property string $pfr
 * @property string $recovery
 * @property string $operational_day
 * @property string $operational_date
 * @property string $dispense_day
 * @property string $dispense_date
 * @property string $penetration_atm
 * @property string $penetration_volume
 * @property string $total
 * @property int $district_id
 * @property int $block_id
 * @property int $record_flag
 *
 * @property \App\Model\Entity\Village $village
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Block $block
 */
class Record extends Entity
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
