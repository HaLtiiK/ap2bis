<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintenance $maintenance
 * @var \Cake\Collection\CollectionInterface|string[] $machines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Maintenances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="maintenances form content">
            <?= $this->Form->create($maintenance) ?>
            <fieldset>
                <legend><?= __('Add Maintenance') ?></legend>
                <?php
                    echo $this->Form->control('machine_id', ['options' => $machines]);
                    echo $this->Form->control('date_maintenance');
                    echo $this->Form->control('description');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>