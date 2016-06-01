<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Theming Entity.
 *
 * @property int $id
 * @property string $main
 * @property string $bg1
 * @property string $bg2
 * @property string $color1
 * @property string $color2
 * @property string $color3
 */
class Theming extends Entity
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
