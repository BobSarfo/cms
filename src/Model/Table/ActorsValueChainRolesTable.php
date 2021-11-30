<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorsValueChainRoles Model
 *
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsTo $Actors
 * @property \App\Model\Table\ValueChainRolesTable&\Cake\ORM\Association\BelongsTo $ValueChainRoles
 *
 * @method \App\Model\Entity\ActorsValueChainRole newEmptyEntity()
 * @method \App\Model\Entity\ActorsValueChainRole newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsValueChainRole[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ActorsValueChainRolesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('actors_value_chain_roles');
        $this->setDisplayField(['value_chain_role_id', 'actor_id']);
        $this->setPrimaryKey(['value_chain_role_id', 'actor_id']);

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ValueChainRoles', [
            'foreignKey' => 'value_chain_role_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('actor_id', 'Actors'), ['errorField' => 'actor_id']);
        $rules->add($rules->existsIn('value_chain_role_id', 'ValueChainRoles'), ['errorField' => 'value_chain_role_id']);

        return $rules;
    }
}
