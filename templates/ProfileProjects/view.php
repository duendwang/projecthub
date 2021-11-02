<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProject $profileProject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profile Project'), ['action' => 'edit', $profileProject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profile Project'), ['action' => 'delete', $profileProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profile Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profile Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profileProjects view content">
            <h3><?= h($profileProject->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $profileProject->has('profile') ? $this->Html->link($profileProject->profile->discord_id, ['controller' => 'Profiles', 'action' => 'view', $profileProject->profile->discord_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $profileProject->has('project') ? $this->Html->link($profileProject->project->name, ['controller' => 'Projects', 'action' => 'view', $profileProject->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profileProject->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($profileProject->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($profileProject->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profileProject->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profileProject->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profileProject->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
