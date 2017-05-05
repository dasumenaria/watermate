<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Block Entity
 *
 * @property int $id
 * @property int $district_id
 * @property string $block_name
 * @property int $block_flag
 *
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Record[] $records
 * @property \App\Model\Entity\Village[] $villages
 */
class Block extends Entity
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
