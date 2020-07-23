<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $name
 * @property string $body
 * @property int $quote
 * @property int $bill
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $projectedend
 * @property string $status
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $id_clients
 * @property int $id_users
 */
class Project extends Entity
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
        'name' => true,
        'body' => true,
        'quote' => true,
        'bill' => true,
        'created' => true,
        'projectedend' => true,
        'status' => true,
        'modified' => true,
        'id_clients' => true,
        'id_users' => true
    ];
}
