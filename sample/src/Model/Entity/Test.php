<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Test Entity
 *
 * @property int $id
 * @property string $NAME
 * @property string $kana
 * @property string $tell
 * @property string $mail
 * @property string $toi
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Test extends Entity
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
        'NAME' => true,
        'kana' => true,
        'tell' => true,
        'mail' => true,
        'toi' => true,
        'modified' => true,
        'password' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    
    protected function _setPassword($value)
 {
     if (strlen($value)) {
         $hasher = new DefaultPasswordHasher();

         return $hasher->hash($value);
     }
 }

}
