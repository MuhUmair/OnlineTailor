<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="order form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->input('referenceNumber');
            echo $this->Form->input('userID');
            echo $this->Form->input('DesignID');
            echo $this->Form->input('createdAt');
            echo $this->Form->input('updatedAt');
            echo $this->Form->input('status');
            echo $this->Form->input('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
