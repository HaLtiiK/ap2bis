<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Machine'), ['action' => 'edit', $machine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Machine'), ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Machines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Machine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="machines view content">
            <h3><?= h($machine->nom) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($machine->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Processeur') ?></th>
                    <td><?= h($machine->processeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Memoire') ?></th>
                    <td><?= h($machine->memoire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Os') ?></th>
                    <td><?= h($machine->os) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilite') ?></th>
                    <td><?= h($machine->disponibilite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($machine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Achat') ?></th>
                    <td><?= h($machine->date_achat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($machine->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($machine->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Games') ?></h4>
                <?php if (!empty($machine->games)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Genre') ?></th>
                            <th><?= __('Plateforme') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($machine->games as $games) : ?>
                        <tr>
                            <td><?= h($games->id) ?></td>
                            <td><?= h($games->nom) ?></td>
                            <td><?= h($games->genre) ?></td>
                            <td><?= h($games->plateforme) ?></td>
                            <td><?= h($games->created_at) ?></td>
                            <td><?= h($games->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Games', 'action' => 'view', $games->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Games', 'action' => 'edit', $games->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Games', 'action' => 'delete', $games->id], ['confirm' => __('Are you sure you want to delete # {0}?', $games->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Maintenances') ?></h4>
                <?php if (!empty($machine->maintenances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Machine Id') ?></th>
                            <th><?= __('Date Maintenance') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($machine->maintenances as $maintenances) : ?>
                        <tr>
                            <td><?= h($maintenances->id) ?></td>
                            <td><?= h($maintenances->machine_id) ?></td>
                            <td><?= h($maintenances->date_maintenance) ?></td>
                            <td><?= h($maintenances->description) ?></td>
                            <td><?= h($maintenances->created_at) ?></td>
                            <td><?= h($maintenances->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Maintenances', 'action' => 'view', $maintenances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Maintenances', 'action' => 'edit', $maintenances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maintenances', 'action' => 'delete', $maintenances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($machine->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Machine Id') ?></th>
                            <th><?= __('Package Id') ?></th>
                            <th><?= __('Date Debut') ?></th>
                            <th><?= __('Date Fin') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($machine->reservations as $reservations) : ?>
                        <tr>
                            <td><?= h($reservations->id) ?></td>
                            <td><?= h($reservations->user_id) ?></td>
                            <td><?= h($reservations->machine_id) ?></td>
                            <td><?= h($reservations->package_id) ?></td>
                            <td><?= h($reservations->date_debut) ?></td>
                            <td><?= h($reservations->date_fin) ?></td>
                            <td><?= h($reservations->created_at) ?></td>
                            <td><?= h($reservations->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
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
