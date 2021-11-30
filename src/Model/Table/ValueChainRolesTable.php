<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ValueChainRoles Model
 *
 * @property \App\Model\Table\EnterpriseValueChainRolesTable&\Cake\ORM\Association\HasMany $EnterpriseValueChainRoles
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsToMany $Actors
 *
 * @method \App\Model\Entity\ValueChainRole newEmptyEntity()
 * @method \App\Model\Entity\ValueChainRole newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ValueChainRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ValueChainRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\ValueChainRole findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ValueChainRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ValueChainRole[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ValueChainRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValueChainRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValueChainRole[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValueChainRole[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValueChainRole[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ValueChainRole[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ValueChainRolesTable extends Table
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

        $this->setTable('value_chain_roles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('EnterpriseValueChainRoles', [
            'foreignKey' => 'value_chain_role_id',
        ]);
        $this->belongsToMany('Actors', [
            'foreignKey' => 'value_chain_role_id',
            'targetForeignKey' => 'actor_id',
            'joinTable' => 'actors_value_chain_roles',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
