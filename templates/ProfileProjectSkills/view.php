<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProjectSkill $profileProjectSkill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profile Project Skill'), ['action' => 'edit', $profileProjectSkill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profile Project Skill'), ['action' => 'delete', $profileProjectSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjectSkill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profile Project Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profile Project Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profileProjectSkills view content">
            <h3><?= h($profileProjectSkill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Proficiency Profile Skill') ?></th>
                    <td><?= $profileProjectSkill->has('proficiency_profile_skill') ? $this->Html->link($profileProjectSkill->proficiency_profile_skill->id, ['controller' => 'ProficiencyProfileSkills', 'action' => 'view', $profileProjectSkill->proficiency_profile_skill->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $profileProjectSkill->has('project') ? $this->Html->link($profileProjectSkill->project->name, ['controller' => 'Projects', 'action' => 'view', $profileProjectSkill->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profileProjectSkill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($profileProjectSkill->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($profileProjectSkill->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profileProjectSkill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profileProjectSkill->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
