<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Theming'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="theming form large-9 medium-8 columns content">
    <?= $this->Form->create($theming) ?>
    <fieldset>
        <legend><?= __('Add Theming') ?></legend>
        <?php
            echo $this->Form->input('main');
            echo $this->Form->input('bg1');
            echo $this->Form->input('bg2');
            echo $this->Form->input('color1');
            echo $this->Form->input('color2');
            echo $this->Form->input('color3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
