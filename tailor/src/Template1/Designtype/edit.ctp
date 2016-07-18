<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designtype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Designtype'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="designtype form large-9 medium-8 columns content">
    <?= $this->Form->create($designtype) ?>
    <fieldset>
        <legend><?= __('Edit Designtype') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
