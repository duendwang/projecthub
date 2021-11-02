<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProfileSkill $proficiencyProfileSkill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proficiency Profile Skill'), ['action' => 'edit', $proficiencyProfileSkill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proficiency Profile Skill'), ['action' => 'delete', $proficiencyProfileSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProfileSkill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proficiency Profile Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proficiency Profile Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proficiencyProfileSkills view content">
            <h3><?= h($proficiencyProfileSkill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $proficiencyProfileSkill->has('profile') ? $this->Html->link($proficiencyProfileSkill->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $proficiencyProfileSkill->profile->discord_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill') ?></th>
                    <td><?= $proficiencyProfileSkill->has('skill') ? $this->Html->link($proficiencyProfileSkill->skill->name, ['controller' => 'Skills', 'action' => 'view', $proficiencyProfileSkill->skill->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Proficiency') ?></th>
                    <td><?= $proficiencyProfileSkill->has('proficiency') ? $this->Html->link($proficiencyProfileSkill->proficiency->name, ['controller' => 'Proficiencies', 'action' => 'view', $proficiencyProfileSkill->proficiency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($proficiencyProfileSkill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($proficiencyProfileSkill->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($proficiencyProfileSkill->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($proficiencyProfileSkill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($proficiencyProfileSkill->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($proficiencyProfileSkill->notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Profile Project Skills') ?></h4>
                <?php if (!empty($proficiencyProfileSkill->profile_project_skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Proficiency Profile Skill Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($proficiencyProfileSkill->profile_project_skills as $profileProjectSkills) : ?>
                        <tr>
                            <td><?= h($profileProjectSkills->id) ?></td>
                            <td><?= h($profileProjectSkills->proficiency_profile_skill_id) ?></td>
                            <td><?= h($profileProjectSkills->project_id) ?></td>
                            <td><?= h($profileProjectSkills->creator) ?></td>
                            <td><?= h($profileProjectSkills->created) ?></td>
                            <td><?= h($profileProjectSkills->modifier) ?></td>
                            <td><?= h($profileProjectSkills->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProfileProjectSkills', 'action' => 'view', $profileProjectSkills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProfileProjectSkills', 'action' => 'edit', $profileProjectSkills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProfileProjectSkills', 'action' => 'delete', $profileProjectSkills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjectSkills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
