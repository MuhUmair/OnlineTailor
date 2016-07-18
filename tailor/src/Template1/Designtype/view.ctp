<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Designtype'), ['action' => 'edit', $designtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Designtype'), ['action' => 'delete', $designtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Designtype'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designtype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="designtype view large-9 medium-8 columns content">
    <h3><?= h($designtype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($designtype->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($designtype->id) ?></td>
        </tr>
    </table>
</div>
