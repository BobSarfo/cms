<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnterpriseValueChainRoles Model
 *
 * @property \App\Model\Table\EnterprisesTable&\Cake\ORM\Association\BelongsTo $Enterprises
 * @property \App\Model\Table\ValueChainRolesTable&\Cake\ORM\Association\BelongsTo $ValueChainRoles
 *
 * @method \App\Model\Entity\EnterpriseValueChainRole newEmptyEntity()
 * @method \App\Model\Entity\EnterpriseValueChainRole newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseValueChainRole[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnterpriseValueChainRolesTable extends Table
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

        $this->setTable('enterprise_value_chain_roles');
        $this->setDisplayField(['value_chain_role_id', 'enterprise_id']);
        $this->setPrimaryKey(['value_chain_role_id', 'enterprise_id']);

        $this->belongsTo('Enterprises', [
            'foreignKey' => 'enterprise_id',
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
        $rules->add($rules->existsIn('enterprise_id', 'Enterprises'), ['errorField' => 'enterprise_id']);
        $rules->add($rules->existsIn('value_chain_role_id', 'ValueChainRoles'), ['errorField' => 'value_chain_role_id']);

        return $rules;
    }
}
