<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyProfile $companyProfile
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $companyProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $companyProfile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Company Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companyProfiles form content">
            <?= $this->Form->create($companyProfile) ?>
            <fieldset>
                <legend><?= __('Edit Company Profile') ?></legend>
                <?php
                    echo $this->Form->control('company_id', ['options' => $companies]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
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
