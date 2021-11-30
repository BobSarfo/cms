<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActorsValueChainRole Entity
 *
 * @property int $actor_id
 * @property int $value_chain_role_id
 *
 * @property \App\Model\Entity\Actor $actor
 * @property \App\Model\Entity\ValueChainRole $value_chain_role
 */
class ActorsValueChainRole extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'actor' => true,
        'value_chain_role' => true,
    ];
}
