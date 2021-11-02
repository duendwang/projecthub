<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProject[]|\Cake\Collection\CollectionInterface $profileProjects
 */
?>
<div class="profileProjects index content">
    <?= $this->Html->link(__('New Profile Project'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profile Projects') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profileProjects as $profileProject): ?>
                <tr>
                    <td><?= $this->Number->format($profileProject->id) ?></td>
                    <td><?= $profileProject->has('profile') ? $this->Html->link($profileProject->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $profileProject->profile->discord_id]) : '' ?></td>
                    <td><?= $profileProject->has('project') ? $this->Html->link($profileProject->project->name, ['controller' => 'Projects', 'action' => 'view', $profileProject->project->id]) : '' ?></td>
                    <td><?= $this->Number->format($profileProject->creator) ?></td>
                    <td><?= h($profileProject->created) ?></td>
                    <td><?= $this->Number->format($profileProject->modifier) ?></td>
                    <td><?= h($profileProject->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profileProject->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profileProject->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profileProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProject->id)]) ?>
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
