<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $udrating->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $udrating->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Udrating'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="udrating form large-9 medium-8 columns content">
    <?= $this->Form->create($udrating) ?>
    <fieldset>
        <legend><?= __('Edit Udrating') ?></legend>
        <?php
            echo $this->Form->input('userID');
            echo $this->Form->input('designID');
            echo $this->Form->input('rating');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
