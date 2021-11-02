<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skill Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ProficiencyProfileSkill[] $proficiency_profile_skills
 * @property \App\Model\Entity\ProficiencyProjectSkill[] $proficiency_project_skills
 */
class Skill extends Entity
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
        'description' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'proficiency_profile_skills' => true,
        'proficiency_project_skills' => true,
    ];
}
