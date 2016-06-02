    <div class="peoplesaying index large-9 medium-8 columns content">
        <h3 style="display: inline-block;"><?= __('Peoplesaying') ?></h3>
        <a style="float:right;" href="<?= $this->Url->build(["controller" => "peoplesaying","action" => "add"]);?>" >
                        <button class="ui button">
                            <i class="plus icon"></i>
                            Add new
                        </button>
        </a>
        <table class="ui celled table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th class="actions"><?= __('Actions') ?>
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peoplesaying as $peoplesaying): ?>
                <tr>
                    <td><?= $this->Number->format($peoplesaying->id) ?></td>
                    <td><?= h($peoplesaying->name) ?></td>
                    <td><?= h($peoplesaying->city) ?></td>
                    <td><?= h($peoplesaying->country) ?></td>
                    <td><?= $this->Number->format($peoplesaying->type) ?></td>
                    <td class="actions">
                        <div class="ui breadcrumb">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $peoplesaying->id],["class" => "section"]) ?>
                            <div class="divider"> / </div>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peoplesaying->id],["class" => "section"]) ?>
                            <div class="divider"> / </div>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peoplesaying->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peoplesaying->id)],["class" => "section"]) ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<style>
.pagination{
        list-style: none;
        padding: 0px;
}
.pagination li{
        display: inline-block;
}
</style>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>

                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>