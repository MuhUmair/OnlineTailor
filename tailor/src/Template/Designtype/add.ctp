<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Designtype'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="designtype form large-9 medium-8 columns content">
    <?= $this->Form->create($designtype) ?>
    <fieldset>
        <legend><?= __('Add Designtype') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
