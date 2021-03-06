<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property bool|null $active
 * @property int $location_id
 * @property int $product_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Cocktail[] $cocktails
 * @property \App\Model\Entity\Type[] $types
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'active' => true,
        'location_id' => true,
        'product_id' => true,
        'created' => true,
        'modified' => true,
        'location' => true,
        'product' => true,
        'orders' => true,
        'cocktails' => true,
        'types' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
