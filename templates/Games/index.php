<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Game> $games
 */
?>
<div class="games index content">
    <?= $this->Html->link(__('New Game'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Games') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('plateforme') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($games as $game): ?>
                <tr>
                    <td><?= $this->Number->format($game->id) ?></td>
                    <td><?= h($game->nom) ?></td>
                    <td><?= h($game->genre) ?></td>
                    <td><?= h($game->plateforme) ?></td>
                    <td><?= h($game->created_at) ?></td>
                    <td><?= h($game->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $game->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $game->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?>
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
