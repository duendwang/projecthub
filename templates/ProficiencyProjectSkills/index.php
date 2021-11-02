<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Collection\CollectionInterface $proficiencyProjectSkills
 */
?>
<div class="proficiencyProjectSkills index content">
    <?= $this->Html->link(__('New Proficiency Project Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proficiency Project Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('skill_id') ?></th>
                    <th><?= $this->Paginator->sort('proficiency_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proficiencyProjectSkills as $proficiencyProjectSkill): ?>
                <tr>
                    <td><?= $this->Number->format($proficiencyProjectSkill->id) ?></td>
                    <td><?= $proficiencyProjectSkill->has('project') ? $this->Html->link($proficiencyProjectSkill->project->name, ['controller' => 'Projects', 'action' => 'view', $proficiencyProjectSkill->project->id]) : '' ?></td>
                    <td><?= $proficiencyProjectSkill->has('skill') ? $this->Html->link($proficiencyProjectSkill->skill->name, ['controller' => 'Skills', 'action' => 'view', $proficiencyProjectSkill->skill->id]) : '' ?></td>
                    <td><?= $proficiencyProjectSkill->has('proficiency') ? $this->Html->link($proficiencyProjectSkill->proficiency->name, ['controller' => 'Proficiencies', 'action' => 'view', $proficiencyProjectSkill->proficiency->id]) : '' ?></td>
                    <td><?= $this->Number->format($proficiencyProjectSkill->creator) ?></td>
                    <td><?= h($proficiencyProjectSkill->created) ?></td>
                    <td><?= $this->Number->format($proficiencyProjectSkill->modifier) ?></td>
                    <td><?= h($proficiencyProjectSkill->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proficiencyProjectSkill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proficiencyProjectSkill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proficiencyProjectSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProjectSkill->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
