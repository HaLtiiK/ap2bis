<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 * @var string[]|\Cake\Collection\CollectionInterface $games
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $machine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Machines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="machines form content">
            <?= $this->Form->create($machine) ?>pipi 
            <fieldset>
                <legend><?= __('Edit Machine') ?></legend>
                <?php
                    echo $this->Form->control('nom');
                    echo $this->Form->control('processeur');
                    echo $this->Form->control('memoire');
                    echo $this->Form->control('os');
                    echo $this->Form->control('disponibilite');
                    echo $this->Form->control('date_achat');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('games._ids', ['options' => $games]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
