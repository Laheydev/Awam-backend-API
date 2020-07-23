<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collaborateur Entity
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property int $salary
 * @property int $quota
 * @property string $img
 */
class Collaborateur extends Entity
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
        'lastname' => true,
        'firstname' => true,
        'salary' => true,
        'quota' => true,
        'img' => true
    ];
}
