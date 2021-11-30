<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enterprises Model
 *
 * @property \App\Model\Table\EnterpriseTypesTable&\Cake\ORM\Association\BelongsTo $EnterpriseTypes
 * @property \App\Model\Table\CommunitiesTable&\Cake\ORM\Association\BelongsTo $Communities
 * @property \App\Model\Table\EnterpriseCommoditiesTable&\Cake\ORM\Association\HasMany $EnterpriseCommodities
 * @property \App\Model\Table\EnterpriseValueChainRolesTable&\Cake\ORM\Association\HasMany $EnterpriseValueChainRoles
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsToMany $Actors
 *
 * @method \App\Model\Entity\Enterprise newEmptyEntity()
 * @method \App\Model\Entity\Enterprise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Enterprise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enterprise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enterprise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Enterprise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enterprise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enterprise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enterprise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enterprise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enterprise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enterprise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enterprise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnterprisesTable extends Table
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

        $this->setTable('enterprises');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EnterpriseTypes', [
            'foreignKey' => 'enterprise_type_id',
        ]);
        $this->belongsTo('Communities', [
            'foreignKey' => 'community_id',
        ]);
        $this->hasMany('EnterpriseCommodities', [
            'foreignKey' => 'enterprise_id',
        ]);
        $this->hasMany('EnterpriseValueChainRoles', [
            'foreignKey' => 'enterprise_id',
        ]);
        $this->belongsToMany('Actors', [
            'foreignKey' => 'enterprise_id',
            'targetForeignKey' => 'actor_id',
            'joinTable' => 'actors_enterprises',
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
            ->maxLength('name', 100)
            ->allowEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 100)
            ->allowEmptyString('suburb');

        $validator
            ->date('date_of_establishment')
            ->allowEmptyDate('date_of_establishment');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone')
            ->add('phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('number_of_employees')
            ->allowEmptyString('number_of_employees');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('registrationNo')
            ->maxLength('registrationNo', 100)
            ->allowEmptyString('registrationNo');

        $validator
            ->scalar('other_phone')
            ->maxLength('other_phone', 20)
            ->allowEmptyString('other_phone');

        $validator
            ->boolean('registed_with_RGD')
            ->allowEmptyString('registed_with_RGD');

        $validator
            ->boolean('registed_with_Assembly')
            ->allowEmptyString('registed_with_Assembly');

        return $validator;
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
        $rules->add($rules->isUnique(['phone'], ['allowMultipleNulls' => true]), ['errorField' => 'phone']);
        $rules->add($rules->isUnique(['name'], ['allowMultipleNulls' => true]), ['errorField' => 'name']);
        $rules->add($rules->existsIn('enterprise_type_id', 'EnterpriseTypes'), ['errorField' => 'enterprise_type_id']);
        $rules->add($rules->existsIn('community_id', 'Communities'), ['errorField' => 'community_id']);

        return $rules;
    }
}
