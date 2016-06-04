<div class="socialmedia form large-9 medium-8 columns content">
    <div class="ui breadcrumb" style="margin-bottom:20px;">
        <a class="section"><?= $this->Html->link(__('List'), ['action' => 'index']) ?></a>
        
    </div>
    
    <?= $this->Form->create($socialmedia, ["class" => "ui form"]) ?>
    <fieldset>
        <legend><?= __('Edit Socialmedia') ?></legend>
        <?php
            echo $this->Form->input('link');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),["class" => "ui primary button"]) ?>
    <?= $this->Form->end() ?>
</div>
