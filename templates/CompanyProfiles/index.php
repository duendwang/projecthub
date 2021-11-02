<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyProfile[]|\Cake\Collection\CollectionInterface $companyProfiles
 */
?>
<div class="companyProfiles index content">
    <?= $this->Html->link(__('New Company Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Company Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($companyProfiles as $companyProfile): ?>
                <tr>
                    <td><?= $this->Number->format($companyProfile->id) ?></td>
                    <td><?= $companyProfile->has('company') ? $this->Html->link($companyProfile->company->name, ['controller' => 'Companies', 'action' => 'view', $companyProfile->company->id]) : '' ?></td>
                    <td><?= $companyProfile->has('profile') ? $this->Html->link($companyProfile->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $companyProfile->profile->discord_id]) : '' ?></td>
                    <td><?= $this->Number->format($companyProfile->creator) ?></td>
                    <td><?= h($companyProfile->created) ?></td>
                    <td><?= $this->Number->format($companyProfile->modifier) ?></td>
                    <td><?= h($companyProfile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $companyProfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companyProfile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companyProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyProfile->id)]) ?>
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
