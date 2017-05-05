<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Block'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villages'), ['controller' => 'Villages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Village'), ['controller' => 'Villages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blocks index large-9 medium-8 columns content">
    <h3><?= __('Blocks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('block_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('block_flag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blocks as $block): ?>
            <tr>
                <td><?= $this->Number->format($block->id) ?></td>
                <td><?= $block->has('district') ? $this->Html->link($block->district->block_name, ['controller' => 'Districts', 'action' => 'view', $block->district->id]) : '' ?></td>
                <td><?= h($block->block_name) ?></td>
                <td><?= $this->Number->format($block->block_flag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $block->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $block->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $block->id], ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
