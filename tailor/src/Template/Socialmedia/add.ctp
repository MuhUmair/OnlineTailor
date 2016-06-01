<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Socialmedia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socialmedia form large-9 medium-8 columns content">
    <?= $this->Form->create($socialmedia) ?>
    <fieldset>
        <legend><?= __('Add Socialmedia') ?></legend>
        <?php
            echo $this->Form->input('link');
            echo $this->Form->input('nameID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
