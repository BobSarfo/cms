<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorsCommodities Model
 *
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsTo $Actors
 * @property \App\Model\Table\CommoditiesTable&\Cake\ORM\Association\BelongsTo $Commodities
 *
 * @method \App\Model\Entity\ActorsCommodity newEmptyEntity()
 * @method \App\Model\Entity\ActorsCommodity newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsCommodity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsCommodity get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorsCommodity findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ActorsCommodity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsCommodity[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsCommodity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsCommodity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsCommodity[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsCommodity[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsCommodity[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ActorsCommodity[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ActorsCommoditiesTable extends Table
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

        $this->setTable('actors_commodities');
        $this->setDisplayField(['actor_id', 'commodity_id']);
        $this->setPrimaryKey(['actor_id', 'commodity_id']);

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Commodities', [
            'foreignKey' => 'commodity_id',
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
        $rules->add($rules->existsIn('commodity_id', 'Commodities'), ['errorField' => 'commodity_id']);

        return $rules;
    }
}
