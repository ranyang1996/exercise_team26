<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $entered
 * @property int $entered_user
 * @property \Cake\I18n\FrozenTime $last_updated
 * @property int $last_updated_user
 * @property string $given_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $email
 * @property string $password
 * @property int $mobile
 * @property int $postcode
 *
 * @property \App\Model\Entity\Enrolment[] $enrolments
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
        'status' => true,
        'entered' => true,
        'entered_user' => true,
        'last_updated' => true,
        'last_updated_user' => true,
        'given_name' => true,
        'last_name' => true,
        'dob' => true,
        'email' => true,
        'password' => true,
        'mobile' => true,
        'postcode' => true,
        'account_type' => true,
        'enrolments' => true,
        'files' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */

   protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }

    protected $_hidden = [
        'password'
    ];
}
