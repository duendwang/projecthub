<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProjectSkill $proficiencyProjectSkill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proficiency Project Skill'), ['action' => 'edit', $proficiencyProjectSkill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proficiency Project Skill'), ['action' => 'delete', $proficiencyProjectSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProjectSkill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proficiency Project Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proficiency Project Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proficiencyProjectSkills view content">
            <h3><?= h($proficiencyProjectSkill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $proficiencyProjectSkill->has('project') ? $this->Html->link($proficiencyProjectSkill->project->name, ['controller' => 'Projects', 'action' => 'view', $proficiencyProjectSkill->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill') ?></th>
                    <td><?= $proficiencyProjectSkill->has('skill') ? $this->Html->link($proficiencyProjectSkill->skill->name, ['controller' => 'Skills', 'action' => 'view', $proficiencyProjectSkill->skill->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Proficiency') ?></th>
                    <td><?= $proficiencyProjectSkill->has('proficiency') ? $this->Html->link($proficiencyProjectSkill->proficiency->name, ['controller' => 'Proficiencies', 'action' => 'view', $proficiencyProjectSkill->proficiency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($proficiencyProjectSkill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($proficiencyProjectSkill->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($proficiencyProjectSkill->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($proficiencyProjectSkill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($proficiencyProjectSkill->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($proficiencyProjectSkill->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
