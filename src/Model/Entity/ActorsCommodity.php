<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActorsCommodity Entity
 *
 * @property int $actor_id
 * @property int $commodity_id
 *
 * @property \App\Model\Entity\Actor $actor
 * @property \App\Model\Entity\Commodity $commodity
 */
class ActorsCommodity extends Entity
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
        'commodity' => true,
    ];
}
