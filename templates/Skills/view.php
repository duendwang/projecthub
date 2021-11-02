<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skills view content">
            <h3><?= h($skill->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($skill->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($skill->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($skill->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($skill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($skill->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($skill->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Proficiency Profile Skills') ?></h4>
                <?php if (!empty($skill->proficiency_profile_skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th><?= __('Proficiency Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->proficiency_profile_skills as $proficiencyProfileSkills) : ?>
                        <tr>
                            <td><?= h($proficiencyProfileSkills->id) ?></td>
                            <td><?= h($proficiencyProfileSkills->profile_id) ?></td>
                            <td><?= h($proficiencyProfileSkills->skill_id) ?></td>
                            <td><?= h($proficiencyProfileSkills->proficiency_id) ?></td>
                            <td><?= h($proficiencyProfileSkills->notes) ?></td>
                            <td><?= h($proficiencyProfileSkills->creator) ?></td>
                            <td><?= h($proficiencyProfileSkills->created) ?></td>
                            <td><?= h($proficiencyProfileSkills->modifier) ?></td>
                            <td><?= h($proficiencyProfileSkills->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProficiencyProfileSkills', 'action' => 'view', $proficiencyProfileSkills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProficiencyProfileSkills', 'action' => 'edit', $proficiencyProfileSkills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProficiencyProfileSkills', 'action' => 'delete', $proficiencyProfileSkills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProfileSkills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Proficiency Project Skills') ?></h4>
                <?php if (!empty($skill->proficiency_project_skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th><?= __('Proficiency Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->proficiency_project_skills as $proficiencyProjectSkills) : ?>
                        <tr>
                            <td><?= h($proficiencyProjectSkills->id) ?></td>
                            <td><?= h($proficiencyProjectSkills->project_id) ?></td>
                            <td><?= h($proficiencyProjectSkills->skill_id) ?></td>
                            <td><?= h($proficiencyProjectSkills->proficiency_id) ?></td>
                            <td><?= h($proficiencyProjectSkills->notes) ?></td>
                            <td><?= h($proficiencyProjectSkills->creator) ?></td>
                            <td><?= h($proficiencyProjectSkills->created) ?></td>
                            <td><?= h($proficiencyProjectSkills->modifier) ?></td>
                            <td><?= h($proficiencyProjectSkills->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProficiencyProjectSkills', 'action' => 'view', $proficiencyProjectSkills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProficiencyProjectSkills', 'action' => 'edit', $proficiencyProjectSkills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProficiencyProjectSkills', 'action' => 'delete', $proficiencyProjectSkills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proficiencyProjectSkills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
