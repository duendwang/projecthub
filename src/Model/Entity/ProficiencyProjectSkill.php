<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProficiencyProjectSkill Entity
 *
 * @property int $id
 * @property int $project_id
 * @property int $skill_id
 * @property int $proficiency_id
 * @property string|null $notes
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Skill $skill
 * @property \App\Model\Entity\Proficiency $proficiency
 */
class ProficiencyProjectSkill extends Entity
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
        'project_id' => true,
        'skill_id' => true,
        'proficiency_id' => true,
        'notes' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'project' => true,
        'skill' => true,
        'proficiency' => true,
    ];
}
