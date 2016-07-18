
<div class="peoplesaying view large-9 medium-8 columns content">
    <h3 style="display:inline-block;"><?= h($peoplesaying->name) ?></h3>
    <div class="ui breadcrumb" style="float:right;">
        <a class="section"><?= $this->Html->link(__('Edit '), ['action' => 'edit', $peoplesaying->id]) ?></a>
        <div class="divider"> / </div>
        <a class="section"><?= $this->Form->postLink(__('Delete '), ['action' => 'delete', $peoplesaying->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peoplesaying->id)]) ?> </a>
        <div class="divider"> / </div>
        <div class="section"><?= $this->Html->link(__('List '), ['action' => 'index']) ?> </div>
        <div class="divider"> / </div>
        <div class="section"><?= $this->Html->link(__('New '), ['action' => 'add']) ?></div>
    </div>
    
    <table class="ui celled table" >
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($peoplesaying->name) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($peoplesaying->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($peoplesaying->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peoplesaying->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($peoplesaying->type) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($peoplesaying->description)); ?>
    </div>
</div>
