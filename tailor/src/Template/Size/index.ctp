<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Size'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="size index large-9 medium-8 columns content">
    <h3><?= __('Size') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('designID') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('shouderLength') ?></th>
                <th><?= $this->Paginator->sort('waist') ?></th>
                <th><?= $this->Paginator->sort('sleeveLength') ?></th>
                <th><?= $this->Paginator->sort('bottomWidth') ?></th>
                <th><?= $this->Paginator->sort('sleeveWidth') ?></th>
                <th><?= $this->Paginator->sort('totalLength') ?></th>
                <th><?= $this->Paginator->sort('chest') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($size as $size): ?>
            <tr>
                <td><?= $this->Number->format($size->id) ?></td>
                <td><?= $this->Number->format($size->designID) ?></td>
                <td><?= $this->Number->format($size->userID) ?></td>
                <td><?= $this->Number->format($size->shouderLength) ?></td>
                <td><?= $this->Number->format($size->waist) ?></td>
                <td><?= $this->Number->format($size->sleeveLength) ?></td>
                <td><?= $this->Number->format($size->bottomWidth) ?></td>
                <td><?= $this->Number->format($size->sleeveWidth) ?></td>
                <td><?= $this->Number->format($size->totalLength) ?></td>
                <td><?= $this->Number->format($size->chest) ?></td>
                <td><?= $this->Number->format($size->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $size->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $size->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
