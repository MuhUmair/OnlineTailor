<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Design'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="design form large-9 medium-8 columns content">
    <?= $this->Form->create($design) ?>
    <fieldset>
        <legend><?= __('Add Design') ?></legend>
        <?php
            echo $this->Form->input('tailorID');
            echo $this->Form->input('designName');
            echo $this->Form->input('description');
            echo $this->Form->input('fabricName');
            echo $this->Form->input('designTypeID');
            echo $this->Form->input('status');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
