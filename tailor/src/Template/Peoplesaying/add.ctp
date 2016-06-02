
<div class="peoplesaying form large-9 medium-8 columns content">
<div class="ui breadcrumb" style="margin-bottom:20px;">
        <a class="section"><?= $this->Html->link(__('List '), ['action' => 'index']) ?></a>
        
    </div>
        
    <?= $this->Form->create($peoplesaying,["class" => "ui form"]) ?>
    <fieldset>
        <legend><?= __('Add Peoplesaying') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),["class" => "ui primary button"]) ?>
    <?= $this->Form->end() ?>
</div>
