<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Theming'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="theming index large-9 medium-8 columns content">
    <h3><?= __('Theming') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('main') ?></th>
                <th><?= $this->Paginator->sort('bg1') ?></th>
                <th><?= $this->Paginator->sort('bg2') ?></th>
                <th><?= $this->Paginator->sort('color1') ?></th>
                <th><?= $this->Paginator->sort('color2') ?></th>
                <th><?= $this->Paginator->sort('color3') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($theming as $theming): ?>
            <tr>
                <td><?= $this->Number->format($theming->id) ?></td>
                <td><?= h($theming->main) ?></td>
                <td><?= h($theming->bg1) ?></td>
                <td><?= h($theming->bg2) ?></td>
                <td><?= h($theming->color1) ?></td>
                <td><?= h($theming->color2) ?></td>
                <td><?= h($theming->color3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $theming->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $theming->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $theming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $theming->id)]) ?>
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
