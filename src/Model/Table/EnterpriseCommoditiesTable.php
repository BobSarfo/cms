<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnterpriseCommodities Model
 *
 * @property \App\Model\Table\EnterprisesTable&\Cake\ORM\Association\BelongsTo $Enterprises
 * @property \App\Model\Table\CommoditiesTable&\Cake\ORM\Association\BelongsTo $Commodities
 *
 * @method \App\Model\Entity\EnterpriseCommodity newEmptyEntity()
 * @method \App\Model\Entity\EnterpriseCommodity newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnterpriseCommoditiesTable extends Table
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

        $this->setTable('enterprise_commodities');
        $this->setDisplayField(['commodity_id', 'enterprise_id']);
        $this->setPrimaryKey(['commodity_id', 'enterprise_id']);

        $this->belongsTo('Enterprises', [
            'foreignKey' => 'enterprise_id',
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
        $rules->add($rules->existsIn('enterprise_id', 'Enterprises'), ['errorField' => 'enterprise_id']);
        $rules->add($rules->existsIn('commodity_id', 'Commodities'), ['errorField' => 'commodity_id']);

        return $rules;
    }
}
