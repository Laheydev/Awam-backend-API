<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collaborateurs Model
 *
 * @method \App\Model\Entity\Collaborateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collaborateur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collaborateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collaborateur|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collaborateur|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collaborateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collaborateur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collaborateur findOrCreate($search, callable $callback = null, $options = [])
 */
class CollaborateursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('collaborateurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 50)
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 50)
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->integer('quota')
            ->requirePresence('quota', 'create')
            ->notEmpty('quota');

        $validator
            ->scalar('img')
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        return $validator;
    }
}
