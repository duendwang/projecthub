<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companies view content">
            <h3><?= h($company->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($company->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($company->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($company->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($company->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($company->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($company->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mission') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($company->mission)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Company Profiles') ?></h4>
                <?php if (!empty($company->company_profiles)) : ?>
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
                        <?php foreach ($company->company_profiles as $companyProfiles) : ?>
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
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($company->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->projects as $projects) : ?>
                        <tr>
                            <td><?= h($projects->id) ?></td>
                            <td><?= h($projects->company_id) ?></td>
                            <td><?= h($projects->name) ?></td>
                            <td><?= h($projects->description) ?></td>
                            <td><?= h($projects->creator) ?></td>
                            <td><?= h($projects->created) ?></td>
                            <td><?= h($projects->modifier) ?></td>
                            <td><?= h($projects->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
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
