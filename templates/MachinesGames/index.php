<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MachinesGame> $machinesGames
 */
?>
<div class="machinesGames index content">
    <?= $this->Html->link(__('New Machines Game'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Machines Games') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('machine_id') ?></th>
                    <th><?= $this->Paginator->sort('game_id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($machinesGames as $machinesGame): ?>
                <tr>
                    <td><?= $this->Number->format($machinesGame->id) ?></td>
                    <td><?= $machinesGame->has('machine') ? $this->Html->link($machinesGame->machine->nom, ['controller' => 'Machines', 'action' => 'view', $machinesGame->machine->id]) : '' ?></td>
                    <td><?= $machinesGame->has('game') ? $this->Html->link($machinesGame->game->nom, ['controller' => 'Games', 'action' => 'view', $machinesGame->game->id]) : '' ?></td>
                    <td><?= h($machinesGame->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $machinesGame->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $machinesGame->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $machinesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machinesGame->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
