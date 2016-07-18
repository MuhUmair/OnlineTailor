<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Udrating'), ['action' => 'edit', $udrating->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Udrating'), ['action' => 'delete', $udrating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $udrating->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Udrating'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Udrating'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="udrating view large-9 medium-8 columns content">
    <h3><?= h($udrating->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($udrating->id) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($udrating->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('DesignID') ?></th>
            <td><?= $this->Number->format($udrating->designID) ?></td>
        </tr>
        <tr>
            <th><?= __('Rating') ?></th>
            <td><?= $this->Number->format($udrating->rating) ?></td>
        </tr>
    </table>
</div>
