<div class="socialmedia view large-9 medium-8 columns content">
    <h3><?= h($socialmedia->name) ?></h3>
    <div class="ui breadcrumb" style="float:right;">
        <a class="section"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialmedia->id]) ?> </a>
        <div class="divider"> / </div>
        <div class="section"><?= $this->Html->link(__('List'), ['action' => 'index']) ?> </div>
        
    </div>
    
    <table class="ui celled table">
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($socialmedia->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialmedia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('NameID') ?></th>
            <td><?= h($socialmedia->name) ?></td>
        </tr>
    </table>
</div>
