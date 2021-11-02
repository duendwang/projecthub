<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->discord_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->discord_id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->discord_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles view content">
            <h3><?= h($profile->discord_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($profile->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($profile->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discord Id') ?></th>
                    <td><?= $this->Number->format($profile->discord_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timezone') ?></th>
                    <td><?= $this->Number->format($profile->timezone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($profile->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profile->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Company Profiles') ?></h4>
                <?php if (!empty($profile->company_profiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->company_profiles as $companyProfiles) : ?>
                        <tr>
                            <td><?= h($companyProfiles->id) ?></td>
                            <td><?= h($companyProfiles->company_id) ?></td>
                            <td><?= h($companyProfiles->profile_id) ?></td>
                            <td><?= h($companyProfiles->notes) ?></td>
                            <td><?= h($companyProfiles->creator) ?></td>
                            <td><?= h($companyProfiles->created) ?></td>
                            <td><?= h($companyProfiles->modifier) ?></td>
                            <td><?= h($companyProfiles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CompanyProfiles', 'action' => 'view', $companyProfiles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CompanyProfiles', 'action' => 'edit', $companyProfiles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanyProfiles', 'action' => 'delete', $companyProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyProfiles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Proficiency Profile Skills') ?></h4>
                <?php if (!empty($profile->proficiency_profile_skills)) : ?>
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
                        <?php foreach ($profile->proficiency_profile_skills as $proficiencyProfileSkills) : ?>
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
                <h4><?= __('Related Profile Projects') ?></h4>
                <?php if (!empty($profile->profile_projects)) : ?>
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
                        <?php foreach ($profile->profile_projects as $profileProjects) : ?>
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
