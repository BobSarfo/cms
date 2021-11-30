<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enterprise Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $enterprise_type_id
 * @property int|null $community_id
 * @property string|null $suburb
 * @property \Cake\I18n\FrozenDate|null $date_of_establishment
 * @property string|null $phone
 * @property int|null $number_of_employees
 * @property string|null $email
 * @property string|null $registrationNo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $other_phone
 * @property bool|null $registed_with_RGD
 * @property bool|null $registed_with_Assembly
 *
 * @property \App\Model\Entity\EnterpriseType $enterprise_type
 * @property \App\Model\Entity\Community $community
 * @property \App\Model\Entity\EnterpriseCommodity[] $enterprise_commodities
 * @property \App\Model\Entity\EnterpriseValueChainRole[] $enterprise_value_chain_roles
 * @property \App\Model\Entity\Actor[] $actors
 */
class Enterprise extends Entity
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
        'enterprise_type_id' => true,
        'community_id' => true,
        'suburb' => true,
        'date_of_establishment' => true,
        'phone' => true,
        'number_of_employees' => true,
        'email' => true,
        'registrationNo' => true,
        'created' => true,
        'modified' => true,
        'other_phone' => true,
        'registed_with_RGD' => true,
        'registed_with_Assembly' => true,
        'enterprise_type' => true,
        'community' => true,
        'enterprise_commodities' => true,
        'enterprise_value_chain_roles' => true,
        'actors' => true,
    ];
}
