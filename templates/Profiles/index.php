<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="profiles index content">
    <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('discord_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('timezone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profiles as $profile): ?>
                <tr>
                    <td><?= $this->Number->format($profile->discord_id) ?></td>
                    <td><?= h($profile->first_name) ?></td>
                    <td><?= h($profile->last_name) ?></td>
                    <td><?= $this->Number->format($profile->timezone) ?></td>
                    <td><?= h($profile->created) ?></td>
                    <td><?= $this->Number->format($profile->modifier) ?></td>
                    <td><?= h($profile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profile->discord_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->discord_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->discord_id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->discord_id)]) ?>
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
