<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnterpriseTypes Model
 *
 * @property \App\Model\Table\EnterprisesTable&\Cake\ORM\Association\HasMany $Enterprises
 *
 * @method \App\Model\Entity\EnterpriseType newEmptyEntity()
 * @method \App\Model\Entity\EnterpriseType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseType get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnterpriseType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EnterpriseType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnterpriseTypesTable extends Table
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

        $this->setTable('enterprise_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Enterprises', [
            'foreignKey' => 'enterprise_type_id',
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
