<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Design'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="design index large-9 medium-8 columns content">
    <h3><?= __('Design') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tailorID') ?></th>
                <th><?= $this->Paginator->sort('designName') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('fabricName') ?></th>
                <th><?= $this->Paginator->sort('designTypeID') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($design as $design): ?>
            <tr>
                <td><?= $this->Number->format($design->id) ?></td>
                <td><?= $this->Number->format($design->tailorID) ?></td>
                <td><?= h($design->designName) ?></td>
                <td><?= h($design->description) ?></td>
                <td><?= h($design->fabricName) ?></td>
                <td><?= $this->Number->format($design->designTypeID) ?></td>
                <td><?= $this->Number->format($design->status) ?></td>
                <td><?= $this->Number->format($design->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $design->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $design->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $design->id], ['confirm' => __('Are you sure you want to delete # {0}?', $design->id)]) ?>
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
