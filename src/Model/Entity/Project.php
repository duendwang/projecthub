<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $description
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\ProficiencyProjectSkill[] $proficiency_project_skills
 * @property \App\Model\Entity\ProfileProjectSkill[] $profile_project_skills
 * @property \App\Model\Entity\ProfileProject[] $profile_projects
 */
class Project extends Entity
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
        'name' => true,
        'description' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'company' => true,
        'proficiency_project_skills' => true,
        'profile_project_skills' => true,
        'profile_projects' => true,
    ];
}
