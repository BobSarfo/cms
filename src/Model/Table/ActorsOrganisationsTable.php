<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorsOrganisations Model
 *
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\BelongsTo $Organisations
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsTo $Actors
 *
 * @method \App\Model\Entity\ActorsOrganisation newEmptyEntity()
 * @method \App\Model\Entity\ActorsOrganisation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsOrganisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsOrganisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsOrganisation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ActorsOrganisationsTable extends Table
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

        $this->setTable('actors_organisations');
        $this->setDisplayField(['organisation_id', 'actor_id']);
        $this->setPrimaryKey(['organisation_id', 'actor_id']);

        $this->belongsTo('Organisations', [
            'foreignKey' => 'organisation_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
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
        $rules->add($rules->existsIn('organisation_id', 'Organisations'), ['errorField' => 'organisation_id']);
        $rules->add($rules->existsIn('actor_id', 'Actors'), ['errorField' => 'actor_id']);

        return $rules;
    }
}
