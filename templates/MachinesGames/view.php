<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MachinesGame $machinesGame
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Machines Game'), ['action' => 'edit', $machinesGame->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Machines Game'), ['action' => 'delete', $machinesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machinesGame->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Machines Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Machines Game'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="machinesGames view content">
            <h3><?= h($machinesGame->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Machine') ?></th>
                    <td><?= $machinesGame->has('machine') ? $this->Html->link($machinesGame->machine->nom, ['controller' => 'Machines', 'action' => 'view', $machinesGame->machine->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Game') ?></th>
                    <td><?= $machinesGame->has('game') ? $this->Html->link($machinesGame->game->nom, ['controller' => 'Games', 'action' => 'view', $machinesGame->game->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($machinesGame->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($machinesGame->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
