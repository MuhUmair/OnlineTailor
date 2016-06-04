<div class="contact form large-9 medium-8 columns content">
    <div class="ui breadcrumb" style="margin-bottom:20px;">
        <a class="section"><?= $this->Html->link(__('List '), ['action' => 'index']) ?></a>
        
    </div>
    
    <?= $this->Form->create($contact, ["class" => "ui form"]) ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('contactNo');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),["class" => "ui primary button"]) ?>
    <?= $this->Form->end() ?>
</div>
