<div class="socialmedia index large-9 medium-8 columns content">
    <h3><?= __('Socialmedia') ?></h3>
        
    <table class="ui celled table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socialmedia as $socialmedia): ?>
            <tr>
                <td><?= $this->Number->format($socialmedia->id) ?></td>
                <td><?= h($socialmedia->link) ?></td>
                <td><?= h($socialmedia->name) ?></td>
                <td class="actions">
                    
                    <div class="ui breadcrumb">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socialmedia->id]) ?>
                        <div class="divider"> / </div>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialmedia->id]) ?>

                    </div>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
