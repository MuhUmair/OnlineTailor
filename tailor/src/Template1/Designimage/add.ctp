<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Designimage'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="designimage form large-9 medium-8 columns content">
    <?= $this->Form->create($designimage) ?>
    <fieldset>
        <legend><?= __('Add Designimage') ?></legend>
        <?php
            echo $this->Form->input('designID');
            echo $this->Form->input('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
