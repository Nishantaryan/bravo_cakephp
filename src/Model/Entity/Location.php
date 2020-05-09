<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $id
 * @property int $location_types_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LocationType $location_type
 * @property \App\Model\Entity\Bay[] $bays
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\User[] $users
 */
class Location extends Entity
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
        'location_types_id' => true,
        'created' => true,
        'modified' => true,
        'location_type' => true,
        'bays' => true,
        'orders' => true,
        'users' => true,
    ];
}
