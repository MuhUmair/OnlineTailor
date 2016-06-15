<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Size'), ['action' => 'edit', $size->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Size'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Size'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<style>
.ui.celled.table tr th:first-child, .ui.celled.table tr td:first-child
{
    width:250px;
}
</style>
                <?php echo $this->element('sidebar-top'); ?>
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <h3 style="text-align:left"><?= h("Size ") ?>
                        <?php if(isset($size->designtype->name) && $size->designtype->name != "") { ?>
                        <?= h($size->designtype->name) ?>
                        <?php } else {  echo "All" ; }?>

                    </h3>
                    <div class="ui breadcrumb" style="float:left" >
                        <?= $this->Html->link(__('Back'), ['action' => 'index']) ?>
                        <div class="divider"> / </div>
                        <?= $this->Html->link(__('New Size'), ['action' => 'add']) ?>
                        <div class="divider"> / </div>
                        <?= $this->Html->link(__('Edit Size'), ['action' => 'edit', $size->id]) ?> 
                        <div class="divider"> / </div>
                        <?= $this->Form->postLink(__('Delete Size'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?>

                    </div>

                    <table class="ui celled table">
                        
                        <tr>
                            <th><?= __('Design') ?></th>
                            <td><?= $this->Number->format($size->designID) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Shoulder Length') ?></th>
                            <td><?= $this->Number->format($size->shouderLength) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Waist') ?></th>
                            <td><?= $this->Number->format($size->waist) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Sleeve Length') ?></th>
                            <td><?= $this->Number->format($size->sleeveLength) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Bottom Width') ?></th>
                            <td><?= $this->Number->format($size->bottomWidth) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Sleeve Width') ?></th>
                            <td><?= $this->Number->format($size->sleeveWidth) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Length') ?></th>
                            <td><?= $this->Number->format($size->totalLength) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Chest') ?></th>
                            <td><?= $this->Number->format($size->chest) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total') ?></th>
                            <td><?= $this->Number->format($size->total) ?></td>
                        </tr>
                    </table>
                </div>
                <?php echo $this->element('sidebar-bottom'); ?>