<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $gender
 * @property string $role
 * @property string $phone
 * @property string $picture
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $store_id
 *
 * @property \App\Model\Entity\Store $store
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
        'name' => true,
        'birthdate' => true,
        'gender' => true,
        'role' => true,
        'phone' => true,
        'picture' => true,
        'created' => true,
        'modified' => true,
        'store_id' => true,
        'store' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
