<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProfileProjectSkill Entity
 *
 * @property int $id
 * @property int $proficiency_profile_skill_id
 * @property int $project_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ProficiencyProfileSkill $proficiency_profile_skill
 * @property \App\Model\Entity\Project $project
 */
class ProfileProjectSkill extends Entity
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
        'proficiency_profile_skill_id' => true,
        'project_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'proficiency_profile_skill' => true,
        'project' => true,
    ];
}
