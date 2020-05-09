<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bay Entity
 *
 * @property int $id
 * @property int $trailer_id
 * @property int $location_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Trailer $trailer
 * @property \App\Model\Entity\Location $location
 */
class Bay extends Entity
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
        'trailer_id' => true,
        'location_id' => true,
        'created' => true,
        'modified' => true,
        'trailer' => true,
        'location' => true,
    ];
}
