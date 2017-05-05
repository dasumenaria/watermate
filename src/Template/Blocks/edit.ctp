<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $block->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villages'), ['controller' => 'Villages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Village'), ['controller' => 'Villages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blocks form large-9 medium-8 columns content">
    <?= $this->Form->create($block) ?>
    <fieldset>
        <legend><?= __('Edit Block') ?></legend>
        <?php
            echo $this->Form->control('district_id', ['options' => $districts]);
            echo $this->Form->control('block_name');
            echo $this->Form->control('block_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
