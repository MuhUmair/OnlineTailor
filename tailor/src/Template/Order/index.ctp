<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="order index large-9 medium-8 columns content">
    <h3><?= __('Order') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('referenceNumber') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('DesignID') ?></th>
                <th><?= $this->Paginator->sort('createdAt') ?></th>
                <th><?= $this->Paginator->sort('updatedAt') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('amount') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= h($order->referenceNumber) ?></td>
                <td><?= $this->Number->format($order->userID) ?></td>
                <td><?= $this->Number->format($order->DesignID) ?></td>
                <td><?= h($order->createdAt) ?></td>
                <td><?= h($order->updatedAt) ?></td>
                <td><?= $this->Number->format($order->status) ?></td>
                <td><?= $this->Number->format($order->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
