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
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $client_id
 * @property int $user_id
 * @property int $status_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Task[] $tasks
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
        'quote' => true,
        'bill' => true,
        'created' => true,
        'projectedend' => true,
        'modified' => true,
        'client_id' => true,
        'user_id' => true,
        'status_id' => true,
        'client' => true,
        'user' => true,
        'status' => true,
        'tasks' => true
    ];
}
