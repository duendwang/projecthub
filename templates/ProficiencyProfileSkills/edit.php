<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProficiencyProfileSkill $proficiencyProfileSkill
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $skills
 * @var string[]|\Cake\Collection\CollectionInterface $proficiencies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proficiencyProfileSkill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProfileSkill->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Proficiency Profile Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proficiencyProfileSkills form content">
            <?= $this->Form->create($proficiencyProfileSkill) ?>
            <fieldset>
                <legend><?= __('Edit Proficiency Profile Skill') ?></legend>
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
