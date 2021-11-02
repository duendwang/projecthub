<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProfileProjectSkill $profileProjectSkill
 * @var string[]|\Cake\Collection\CollectionInterface $proficiencyProfileSkills
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profileProjectSkill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjectSkill->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Profile Project Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profileProjectSkills form content">
            <?= $this->Form->create($profileProjectSkill) ?>
            <fieldset>
                <legend><?= __('Edit Profile Project Skill') ?></legend>
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
