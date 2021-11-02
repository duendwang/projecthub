<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Collection\CollectionInterface $proficiencyProfileSkills
 */
?>
<div class="proficiencyProfileSkills index content">
    <?= $this->Html->link(__('New Proficiency Profile Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proficiency Profile Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
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
                <?php foreach ($proficiencyProfileSkills as $proficiencyProfileSkill): ?>
                <tr>
                    <td><?= $this->Number->format($proficiencyProfileSkill->id) ?></td>
                    <td><?= $proficiencyProfileSkill->has('profile') ? $this->Html->link($proficiencyProfileSkill->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $proficiencyProfileSkill->profile->discord_id]) : '' ?></td>
                    <td><?= $proficiencyProfileSkill->has('skill') ? $this->Html->link($proficiencyProfileSkill->skill->name, ['controller' => 'Skills', 'action' => 'view', $proficiencyProfileSkill->skill->id]) : '' ?></td>
                    <td><?= $proficiencyProfileSkill->has('proficiency') ? $this->Html->link($proficiencyProfileSkill->proficiency->name, ['controller' => 'Proficiencies', 'action' => 'view', $proficiencyProfileSkill->proficiency->id]) : '' ?></td>
                    <td><?= $this->Number->format($proficiencyProfileSkill->creator) ?></td>
                    <td><?= h($proficiencyProfileSkill->created) ?></td>
                    <td><?= $this->Number->format($proficiencyProfileSkill->modifier) ?></td>
                    <td><?= h($proficiencyProfileSkill->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proficiencyProfileSkill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proficiencyProfileSkill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proficiencyProfileSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProfileSkill->id)]) ?>
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
