<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects view content">
            <h3><?= h($project->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $project->has('company') ? $this->Html->link($project->company->name, ['controller' => 'Companies', 'action' => 'view', $project->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($project->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($project->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($project->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($project->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($project->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($project->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Proficiency Project Skills') ?></h4>
                <?php if (!empty($project->proficiency_project_skills)) : ?>
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
                        <?php foreach ($project->proficiency_project_skills as $proficiencyProjectSkills) : ?>
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
            <div class="related">
                <h4><?= __('Related Profile Project Skills') ?></h4>
                <?php if (!empty($project->profile_project_skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Proficiency Profile Skill Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->profile_project_skills as $profileProjectSkills) : ?>
                        <tr>
                            <td><?= h($profileProjectSkills->id) ?></td>
                            <td><?= h($profileProjectSkills->proficiency_profile_skill_id) ?></td>
                            <td><?= h($profileProjectSkills->project_id) ?></td>
                            <td><?= h($profileProjectSkills->creator) ?></td>
                            <td><?= h($profileProjectSkills->created) ?></td>
                            <td><?= h($profileProjectSkills->modifier) ?></td>
                            <td><?= h($profileProjectSkills->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProfileProjectSkills', 'action' => 'view', $profileProjectSkills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProfileProjectSkills', 'action' => 'edit', $profileProjectSkills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProfileProjectSkills', 'action' => 'delete', $profileProjectSkills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjectSkills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Profile Projects') ?></h4>
                <?php if (!empty($project->profile_projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->profile_projects as $profileProjects) : ?>
                        <tr>
                            <td><?= h($profileProjects->id) ?></td>
                            <td><?= h($profileProjects->profile_id) ?></td>
                            <td><?= h($profileProjects->project_id) ?></td>
                            <td><?= h($profileProjects->notes) ?></td>
                            <td><?= h($profileProjects->creator) ?></td>
                            <td><?= h($profileProjects->created) ?></td>
                            <td><?= h($profileProjects->modifier) ?></td>
                            <td><?= h($profileProjects->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProfileProjects', 'action' => 'view', $profileProjects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProfileProjects', 'action' => 'edit', $profileProjects->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProfileProjects', 'action' => 'delete', $profileProjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profileProjects->id)]) ?>
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
