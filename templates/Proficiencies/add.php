<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proficiency $proficiency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proficiencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proficiencies form content">
            <?= $this->Form->create($proficiency) ?>
            <fieldset>
                <legend><?= __('Add Proficiency') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('order_num');
                    echo $this->Form->control('description');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
