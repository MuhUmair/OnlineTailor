<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Socialmedia'), ['action' => 'edit', $socialmedia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Socialmedia'), ['action' => 'delete', $socialmedia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialmedia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Socialmedia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Socialmedia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialmedia view large-9 medium-8 columns content">
    <h3><?= h($socialmedia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($socialmedia->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialmedia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('NameID') ?></th>
            <td><?= $this->Number->format($socialmedia->nameID) ?></td>
        </tr>
    </table>
</div>
