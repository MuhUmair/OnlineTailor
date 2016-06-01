<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Theming'), ['action' => 'edit', $theming->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Theming'), ['action' => 'delete', $theming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $theming->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Theming'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Theming'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="theming view large-9 medium-8 columns content">
    <h3><?= h($theming->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Main') ?></th>
            <td><?= h($theming->main) ?></td>
        </tr>
        <tr>
            <th><?= __('Bg1') ?></th>
            <td><?= h($theming->bg1) ?></td>
        </tr>
        <tr>
            <th><?= __('Bg2') ?></th>
            <td><?= h($theming->bg2) ?></td>
        </tr>
        <tr>
            <th><?= __('Color1') ?></th>
            <td><?= h($theming->color1) ?></td>
        </tr>
        <tr>
            <th><?= __('Color2') ?></th>
            <td><?= h($theming->color2) ?></td>
        </tr>
        <tr>
            <th><?= __('Color3') ?></th>
            <td><?= h($theming->color3) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($theming->id) ?></td>
        </tr>
    </table>
</div>
