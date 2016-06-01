<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Designimage'), ['action' => 'edit', $designimage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Designimage'), ['action' => 'delete', $designimage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designimage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Designimage'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designimage'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="designimage view large-9 medium-8 columns content">
    <h3><?= h($designimage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Img') ?></th>
            <td><?= h($designimage->img) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($designimage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('DesignID') ?></th>
            <td><?= $this->Number->format($designimage->designID) ?></td>
        </tr>
    </table>
</div>
