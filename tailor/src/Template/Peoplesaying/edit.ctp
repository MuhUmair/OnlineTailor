<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peoplesaying->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peoplesaying->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Peoplesaying'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="peoplesaying form large-9 medium-8 columns content">
    <?= $this->Form->create($peoplesaying) ?>
    <fieldset>
        <legend><?= __('Edit Peoplesaying') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
