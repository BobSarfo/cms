<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actors Model
 *
 * @property \App\Model\Table\SexesTable&\Cake\ORM\Association\BelongsTo $Sexes
 * @property \App\Model\Table\DisabilitiesTable&\Cake\ORM\Association\BelongsTo $Disabilities
 * @property \App\Model\Table\SectorsTable&\Cake\ORM\Association\BelongsTo $Sectors
 * @property \App\Model\Table\CommunitiesTable&\Cake\ORM\Association\BelongsTo $Communities
 * @property \App\Model\Table\ProductionScalesTable&\Cake\ORM\Association\BelongsTo $ProductionScales
 * @property \App\Model\Table\CommoditiesTable&\Cake\ORM\Association\BelongsToMany $Commodities
 * @property \App\Model\Table\EnterprisesTable&\Cake\ORM\Association\BelongsToMany $Enterprises
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\BelongsToMany $Organisations
 * @property \App\Model\Table\ValueChainRolesTable&\Cake\ORM\Association\BelongsToMany $ValueChainRoles
 *
 * @method \App\Model\Entity\Actor newEmptyEntity()
 * @method \App\Model\Entity\Actor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Actor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Actor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActorsTable extends Table
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

        $this->setTable('actors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sexes', [
            'foreignKey' => 'sex_id',
        ]);
        $this->belongsTo('Disabilities', [
            'foreignKey' => 'disability_id',
        ]);
        $this->belongsTo('Sectors', [
            'foreignKey' => 'sector_id',
        ]);
        $this->belongsTo('Communities', [
            'foreignKey' => 'community_id',
        ]);
        $this->belongsTo('ProductionScales', [
            'foreignKey' => 'production_scale_id',
        ]);
        $this->belongsToMany('Commodities', [
            'foreignKey' => 'actor_id',
            'targetForeignKey' => 'commodity_id',
            'joinTable' => 'actors_commodities',
        ]);
        $this->belongsToMany('Enterprises', [
            'foreignKey' => 'actor_id',
            'targetForeignKey' => 'enterprise_id',
            'joinTable' => 'actors_enterprises',
        ]);
        $this->belongsToMany('Organisations', [
            'foreignKey' => 'actor_id',
            'targetForeignKey' => 'organisation_id',
            'joinTable' => 'actors_organisations',
        ]);
        $this->belongsToMany('ValueChainRoles', [
            'foreignKey' => 'actor_id',
            'targetForeignKey' => 'value_chain_role_id',
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->date('date_of_birth')
            ->allowEmptyDate('date_of_birth');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone')
            ->add('phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('other_phone')
            ->maxLength('other_phone', 20)
            ->allowEmptyString('other_phone');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 50)
            ->allowEmptyString('suburb');

        $validator
            ->boolean('registed_with_RGD')
            ->allowEmptyString('registed_with_RGD');

        $validator
            ->boolean('registed_with_Assembly')
            ->allowEmptyString('registed_with_Assembly');

        $validator
            ->scalar('other_related_activity')
            ->maxLength('other_related_activity', 250)
            ->allowEmptyString('other_related_activity');

        $validator
            ->scalar('additional_comments')
            ->maxLength('additional_comments', 250)
            ->allowEmptyString('additional_comments');

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
        $rules->add($rules->existsIn('sex_id', 'Sexes'), ['errorField' => 'sex_id']);
        $rules->add($rules->existsIn('disability_id', 'Disabilities'), ['errorField' => 'disability_id']);
        $rules->add($rules->existsIn('sector_id', 'Sectors'), ['errorField' => 'sector_id']);
        $rules->add($rules->existsIn('community_id', 'Communities'), ['errorField' => 'community_id']);
        $rules->add($rules->existsIn('production_scale_id', 'ProductionScales'), ['errorField' => 'production_scale_id']);

        return $rules;
    }
}
