<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property int $time
 * @property int $elapsedtime
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $collaborateur_id
 * @property int $project_id
 * @property int $category_id
 * @property int $type_id
 * @property int $status_id
 *
 * @property \App\Model\Entity\Collaborateur $collaborateur
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Timeontask[] $timeontasks
 */
class Task extends Entity
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
        'billed' => true,
        'elapsedtime' => true,
        'created' => true,
        'modified' => true,
        'collaborateur_id' => true,
        'project_id' => true,
        'category_id' => true,
        'type_id' => true,
        'status_id' => true,
        'collaborateur' => true,
        'project' => true,
        'category' => true,
        'type' => true,
        'status' => true,
        'timeontasks' => true,
        'dailycost' => true
    ];
}
