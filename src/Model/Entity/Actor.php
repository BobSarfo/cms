<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actor Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property int|null $sex_id
 * @property int|null $disability_id
 * @property int|null $sector_id
 * @property string|null $phone
 * @property string|null $other_phone
 * @property int|null $community_id
 * @property string|null $suburb
 * @property bool|null $registed_with_RGD
 * @property bool|null $registed_with_Assembly
 * @property int|null $production_scale_id
 * @property string|null $other_related_activity
 * @property string|null $additional_comments
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sex $sex
 * @property \App\Model\Entity\Disability $disability
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\Community $community
 * @property \App\Model\Entity\ProductionScale $production_scale
 * @property \App\Model\Entity\Commodity[] $commodities
 * @property \App\Model\Entity\Enterprise[] $enterprises
 * @property \App\Model\Entity\Organisation[] $organisations
 * @property \App\Model\Entity\ValueChainRole[] $value_chain_roles
 */
class Actor extends Entity
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
        'name' => true,
        'date_of_birth' => true,
        'sex_id' => true,
        'disability_id' => true,
        'sector_id' => true,
        'phone' => true,
        'other_phone' => true,
        'community_id' => true,
        'suburb' => true,
        'registed_with_RGD' => true,
        'registed_with_Assembly' => true,
        'production_scale_id' => true,
        'other_related_activity' => true,
        'additional_comments' => true,
        'created' => true,
        'modified' => true,
        'sex' => true,
        'disability' => true,
        'sector' => true,
        'community' => true,
        'production_scale' => true,
        'commodities' => true,
        'enterprises' => true,
        'organisations' => true,
        'value_chain_roles' => true,
    ];
}
