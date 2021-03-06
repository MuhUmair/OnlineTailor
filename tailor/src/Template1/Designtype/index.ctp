<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Designtype'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designtype index large-9 medium-8 columns content">
    <h3><?= __('Designtype') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($designtype as $designtype): ?>
            <tr>
                <td><?= $this->Number->format($designtype->id) ?></td>
                <td><?= h($designtype->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $designtype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designtype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designtype->id)]) ?>
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
