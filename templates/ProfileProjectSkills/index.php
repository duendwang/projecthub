<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProjectSkill[]|\Cake\Collection\CollectionInterface $profileProjectSkills
 */
?>
<div class="profileProjectSkills index content">
    <?= $this->Html->link(__('New Profile Project Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profile Project Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('proficiency_profile_skill_id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profileProjectSkills as $profileProjectSkill): ?>
                <tr>
                    <td><?= $this->Number->format($profileProjectSkill->id) ?></td>
                    <td><?= $profileProjectSkill->has('proficiency_profile_skill') ? $this->Html->link($profileProjectSkill->proficiency_profile_skill->id, ['controller' => 'ProficiencyProfileSkills', 'action' => 'view', $profileProjectSkill->proficiency_profile_skill->id]) : '' ?></td>
                    <td><?= $profileProjectSkill->has('project') ? $this->Html->link($profileProjectSkill->project->name, ['controller' => 'Projects', 'action' => 'view', $profileProjectSkill->project->id]) : '' ?></td>
                    <td><?= $this->Number->format($profileProjectSkill->creator) ?></td>
                    <td><?= h($profileProjectSkill->created) ?></td>
                    <td><?= $this->Number->format($profileProjectSkill->modifier) ?></td>
                    <td><?= h($profileProjectSkill->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profileProjectSkill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profileProjectSkill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profileProjectSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjectSkill->id)]) ?>
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
