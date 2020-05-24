<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
use Cake\ORM\Table;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $username
 * @property string $furi
 * @property string $tell
 * @property string $email
 * @property string $contact
 * @property \Cake\I18n\FrozenTime|null $created
 */
class Contact extends Entity
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
        'furi' => true,
        'tell' => true,
        'email' => true,
        'contact' => true,
        'created' => true,
    ];

}
