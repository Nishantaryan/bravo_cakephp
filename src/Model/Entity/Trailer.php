<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trailer Entity
 *
 * @property int $id
 * @property int $trailer_number
 * @property int $driver_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Driver $driver
 */
class Trailer extends Entity
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
        'trailer_number' => true,
        'driver_id' => true,
        'created' => true,
        'modified' => true,
        'driver' => true,
    ];
}
