<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Designimage'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designimage index large-9 medium-8 columns content">
    <h3><?= __('Designimage') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('designID') ?></th>
                <th><?= $this->Paginator->sort('img') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($designimage as $designimage): ?>
            <tr>
                <td><?= $this->Number->format($designimage->id) ?></td>
                <td><?= $this->Number->format($designimage->designID) ?></td>
                <td><?= h($designimage->img) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $designimage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designimage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designimage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designimage->id)]) ?>
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
