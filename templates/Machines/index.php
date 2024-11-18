<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Machine> $machines
 */
?>
<div class="machines index content">
    <?= $this->Html->link(__('New Machine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Machines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('processeur') ?></th>
                    <th><?= $this->Paginator->sort('memoire') ?></th>
                    <th><?= $this->Paginator->sort('os') ?></th>
                    <th><?= $this->Paginator->sort('disponibilite') ?></th>
                    <th><?= $this->Paginator->sort('date_achat') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($machines as $machine): ?>
                <tr>
                    <td><?= $this->Number->format($machine->id) ?></td>
                    <td><?= h($machine->nom) ?></td>
                    <td><?= h($machine->processeur) ?></td>
                    <td><?= h($machine->memoire) ?></td>
                    <td><?= h($machine->os) ?></td>
                    <td><?= h($machine->disponibilite) ?></td>
                    <td><?= h($machine->date_achat) ?></td>
                    <td><?= h($machine->created_at) ?></td>
                    <td><?= h($machine->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $machine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $machine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id)]) ?>
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
