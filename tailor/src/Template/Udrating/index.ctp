<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Udrating'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="udrating index large-9 medium-8 columns content">
    <h3><?= __('Udrating') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('designID') ?></th>
                <th><?= $this->Paginator->sort('rating') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($udrating as $udrating): ?>
            <tr>
                <td><?= $this->Number->format($udrating->id) ?></td>
                <td><?= $this->Number->format($udrating->userID) ?></td>
                <td><?= $this->Number->format($udrating->designID) ?></td>
                <td><?= $this->Number->format($udrating->rating) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $udrating->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $udrating->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $udrating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $udrating->id)]) ?>
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
