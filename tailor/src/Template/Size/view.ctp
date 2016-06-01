<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Size'), ['action' => 'edit', $size->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Size'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Size'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="size view large-9 medium-8 columns content">
    <h3><?= h($size->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($size->id) ?></td>
        </tr>
        <tr>
            <th><?= __('DesignID') ?></th>
            <td><?= $this->Number->format($size->designID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($size->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('ShouderLength') ?></th>
            <td><?= $this->Number->format($size->shouderLength) ?></td>
        </tr>
        <tr>
            <th><?= __('Waist') ?></th>
            <td><?= $this->Number->format($size->waist) ?></td>
        </tr>
        <tr>
            <th><?= __('SleeveLength') ?></th>
            <td><?= $this->Number->format($size->sleeveLength) ?></td>
        </tr>
        <tr>
            <th><?= __('BottomWidth') ?></th>
            <td><?= $this->Number->format($size->bottomWidth) ?></td>
        </tr>
        <tr>
            <th><?= __('SleeveWidth') ?></th>
            <td><?= $this->Number->format($size->sleeveWidth) ?></td>
        </tr>
        <tr>
            <th><?= __('TotalLength') ?></th>
            <td><?= $this->Number->format($size->totalLength) ?></td>
        </tr>
        <tr>
            <th><?= __('Chest') ?></th>
            <td><?= $this->Number->format($size->chest) ?></td>
        </tr>
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($size->total) ?></td>
        </tr>
    </table>
</div>
