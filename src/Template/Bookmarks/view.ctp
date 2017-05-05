<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookmark'), ['action' => 'edit', $bookmark->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookmark'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks Tags'), ['controller' => 'BookmarksTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmarks Tag'), ['controller' => 'BookmarksTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookmarks view large-9 medium-8 columns content">
    <h3><?= h($bookmark->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bookmark->has('user') ? $this->Html->link($bookmark->user->id, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($bookmark->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookmark->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bookmark->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bookmark->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bookmarks Tags') ?></h4>
        <?php if (!empty($bookmark->bookmarks_tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bookmark Id') ?></th>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bookmark->bookmarks_tags as $bookmarksTags): ?>
            <tr>
                <td><?= h($bookmarksTags->id) ?></td>
                <td><?= h($bookmarksTags->bookmark_id) ?></td>
                <td><?= h($bookmarksTags->tag_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BookmarksTags', 'action' => 'view', $bookmarksTags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BookmarksTags', 'action' => 'edit', $bookmarksTags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookmarksTags', 'action' => 'delete', $bookmarksTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
