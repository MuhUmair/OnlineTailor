<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Size'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="size form large-9 medium-8 columns content">
    <?= $this->Form->create($size) ?>
    <fieldset>
        <legend><?= __('Add Size') ?></legend>
        <?php
            echo $this->Form->input('designID');
            echo $this->Form->input('userID');
            echo $this->Form->input('shouderLength');
            echo $this->Form->input('waist');
            echo $this->Form->input('sleeveLength');
            echo $this->Form->input('bottomWidth');
            echo $this->Form->input('sleeveWidth');
            echo $this->Form->input('totalLength');
            echo $this->Form->input('chest');
            echo $this->Form->input('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
