<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Socialmedia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialmedia index large-9 medium-8 columns content">
    <h3><?= __('Socialmedia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('nameID') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socialmedia as $socialmedia): ?>
            <tr>
                <td><?= $this->Number->format($socialmedia->id) ?></td>
                <td><?= h($socialmedia->link) ?></td>
                <td><?= $this->Number->format($socialmedia->nameID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $socialmedia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialmedia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialmedia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialmedia->id)]) ?>
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
