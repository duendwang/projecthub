<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProject $profileProject
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profileProject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profileProject->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Profile Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profileProjects form content">
            <?= $this->Form->create($profileProject) ?>
            <fieldset>
                <legend><?= __('Edit Profile Project') ?></legend>
                <?php
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                    echo $this->Form->control('project_id', ['options' => $projects]);
                    echo $this->Form->control('notes');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
