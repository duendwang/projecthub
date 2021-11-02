<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProjectSkill $profileProjectSkill
 * @var \Cake\Collection\CollectionInterface|string[] $proficiencyProfileSkills
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profile Project Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profileProjectSkills form content">
            <?= $this->Form->create($profileProjectSkill) ?>
            <fieldset>
                <legend><?= __('Add Profile Project Skill') ?></legend>
                <?php
                    echo $this->Form->control('proficiency_profile_skill_id', ['options' => $proficiencyProfileSkills]);
                    echo $this->Form->control('project_id', ['options' => $projects]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
