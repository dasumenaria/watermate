<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villages'), ['controller' => 'Villages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Village'), ['controller' => 'Villages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districts form large-9 medium-8 columns content">
    <?= $this->Form->create($district) ?>
    <fieldset>
        <legend><?= __('Add District') ?></legend>
        <?php
            echo $this->Form->control('district_name');
            echo $this->Form->control('district_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
