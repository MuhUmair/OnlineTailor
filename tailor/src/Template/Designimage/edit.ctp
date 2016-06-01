<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designimage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designimage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Designimage'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="designimage form large-9 medium-8 columns content">
    <?= $this->Form->create($designimage) ?>
    <fieldset>
        <legend><?= __('Edit Designimage') ?></legend>
        <?php
            echo $this->Form->input('designID');
            echo $this->Form->input('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
