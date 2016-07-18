<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Udrating'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="udrating form large-9 medium-8 columns content">
    <?= $this->Form->create($udrating) ?>
    <fieldset>
        <legend><?= __('Add Udrating') ?></legend>
        <?php
            echo $this->Form->input('userID');
            echo $this->Form->input('designID');
            echo $this->Form->input('rating');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
