<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyProfile Entity
 *
 * @property int $id
 * @property int $company_id
 * @property int $profile_id
 * @property string|null $notes
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Profile $profile
 */
class CompanyProfile extends Entity
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
        'company_id' => true,
        'profile_id' => true,
        'notes' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'company' => true,
        'profile' => true,
    ];
}
