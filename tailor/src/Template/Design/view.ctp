<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Design'), ['action' => 'edit', $design->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Design'), ['action' => 'delete', $design->id], ['confirm' => __('Are you sure you want to delete # {0}?', $design->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Design'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="design view large-9 medium-8 columns content">
    <h3><?= h($design->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('DesignName') ?></th>
            <td><?= h($design->designName) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($design->description) ?></td>
        </tr>
        <tr>
            <th><?= __('FabricName') ?></th>
            <td><?= h($design->fabricName) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($design->id) ?></td>
        </tr>
        <tr>
            <th><?= __('TailorID') ?></th>
            <td><?= $this->Number->format($design->tailorID) ?></td>
        </tr>
        <tr>
            <th><?= __('DesignTypeID') ?></th>
            <td><?= $this->Number->format($design->designTypeID) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($design->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($design->price) ?></td>
        </tr>
    </table>
</div>
