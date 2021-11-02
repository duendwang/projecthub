<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $discord_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $timezone
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CompanyProfile[] $company_profiles
 * @property \App\Model\Entity\ProficiencyProfileSkill[] $proficiency_profile_skills
 * @property \App\Model\Entity\ProfileProject[] $profile_projects
 */
class Profile extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'timezone' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'company_profiles' => true,
        'proficiency_profile_skills' => true,
        'profile_projects' => true,
    ];
}
