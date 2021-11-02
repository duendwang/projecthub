<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProfileSkill $proficiencyProfileSkill
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 * @var \Cake\Collection\CollectionInterface|string[] $proficiencies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proficiency Profile Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proficiencyProfileSkills form content">
            <?= $this->Form->create($proficiencyProfileSkill) ?>
            <fieldset>
                <legend><?= __('Add Proficiency Profile Skill') ?></legend>
                <?php
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                    echo $this->Form->control('skill_id', ['options' => $skills]);
                    echo $this->Form->control('proficiency_id', ['options' => $proficiencies]);
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
