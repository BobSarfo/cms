<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductionScales Model
 *
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\HasMany $Actors
 *
 * @method \App\Model\Entity\ProductionScale newEmptyEntity()
 * @method \App\Model\Entity\ProductionScale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductionScale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductionScale get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductionScale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductionScale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductionScale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductionScale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductionScale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductionScale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductionScale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductionScale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductionScale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductionScalesTable extends Table
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

        $this->setTable('production_scales');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Actors', [
            'foreignKey' => 'production_scale_id',
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
