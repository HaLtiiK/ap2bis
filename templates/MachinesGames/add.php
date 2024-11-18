<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MachinesGame $machinesGame
 * @var \Cake\Collection\CollectionInterface|string[] $machines
 * @var \Cake\Collection\CollectionInterface|string[] $games
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Machines Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="machinesGames form content">
            <?= $this->Form->create($machinesGame) ?>
            <fieldset>
                <legend><?= __('Add Machines Game') ?></legend>
                <?php
                    echo $this->Form->control('machine_id', ['options' => $machines]);
                    echo $this->Form->control('game_id', ['options' => $games]);
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
