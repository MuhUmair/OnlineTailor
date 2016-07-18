<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity.
 *
 * @property int $id
 * @property string $detail
 * @property float $ratingAvg
 * @property string $city
 * @property string $country
 * @property string $address
 * @property int $memberType
 * @property string $telephone
 * @property string $mobile
 * @property int $happyCustomerCount
 * @property string $lat
 * @property string $glong
 */
class Profile extends Entity
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
        'id' => false,
    ];
}
