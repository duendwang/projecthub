<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill[]|\Cake\Collection\CollectionInterface $skills
 */
?>
<div class="skills index content">
    <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skills as $skill): ?>
                <tr>
                    <td><?= $this->Number->format($skill->id) ?></td>
                    <td><?= h($skill->name) ?></td>
                    <td><?= $this->Number->format($skill->creator) ?></td>
                    <td><?= h($skill->created) ?></td>
                    <td><?= $this->Number->format($skill->modifier) ?></td>
                    <td><?= h($skill->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $skill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?>
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
