<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActorsOrganisation Entity
 *
 * @property int $organisation_id
 * @property int $actor_id
 *
 * @property \App\Model\Entity\Organisation $organisation
 * @property \App\Model\Entity\Actor $actor
 */
class ActorsOrganisation extends Entity
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
        'organisation' => true,
        'actor' => true,
    ];
}
