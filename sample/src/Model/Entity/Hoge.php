<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hoge Entity
 *
 * @property int $id
 * @property string $hoge
 * @property string $password
 * @property string $textarea
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Hoge extends Entity
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
        'hoge' => true,
        'password' => true,
        'textarea' => true,
        'updated' => true,
        'modified' => true,
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
