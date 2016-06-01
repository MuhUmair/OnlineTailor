<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Peoplesaying'), ['action' => 'edit', $peoplesaying->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Peoplesaying'), ['action' => 'delete', $peoplesaying->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peoplesaying->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peoplesaying'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Peoplesaying'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peoplesaying view large-9 medium-8 columns content">
    <h3><?= h($peoplesaying->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($peoplesaying->name) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($peoplesaying->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($peoplesaying->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peoplesaying->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($peoplesaying->type) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($peoplesaying->description)); ?>
    </div>
</div>
