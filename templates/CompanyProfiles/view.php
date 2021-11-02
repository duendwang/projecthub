<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyProfile $companyProfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company Profile'), ['action' => 'edit', $companyProfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company Profile'), ['action' => 'delete', $companyProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyProfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Company Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companyProfiles view content">
            <h3><?= h($companyProfile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $companyProfile->has('company') ? $this->Html->link($companyProfile->company->name, ['controller' => 'Companies', 'action' => 'view', $companyProfile->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $companyProfile->has('profile') ? $this->Html->link($companyProfile->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $companyProfile->profile->discord_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($companyProfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($companyProfile->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($companyProfile->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($companyProfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($companyProfile->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($companyProfile->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
