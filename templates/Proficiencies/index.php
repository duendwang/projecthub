<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proficiency[]|\Cake\Collection\CollectionInterface $proficiencies
 */
?>
<div class="proficiencies index content">
    <?= $this->Html->link(__('New Proficiency'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proficiencies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('order_num') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proficiencies as $proficiency): ?>
                <tr>
                    <td><?= $this->Number->format($proficiency->id) ?></td>
                    <td><?= h($proficiency->name) ?></td>
                    <td><?= $this->Number->format($proficiency->order_num) ?></td>
                    <td><?= $this->Number->format($proficiency->creator) ?></td>
                    <td><?= h($proficiency->created) ?></td>
                    <td><?= $this->Number->format($proficiency->modifier) ?></td>
                    <td><?= h($proficiency->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proficiency->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proficiency->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proficiency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiency->id)]) ?>
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
