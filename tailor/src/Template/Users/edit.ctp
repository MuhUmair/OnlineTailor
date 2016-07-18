<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Tailor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ["class" => "ui form"]) ?>
    <fieldset>
        <label>Member type</label>
        <?php
            echo $this->Form->input('mType', [
                'options' => [ '1' => 'Free', '2' => 'Silver', '3' => 'Gold'],'label' => false 
            ]);
            echo "<label>Is Active</label>";
            echo $this->Form->input('isActive', [
                'options' => [ '0' => 'Not', '1' => 'Activate'],'label' => false 
            ]);
            //echo $this->Form->input('mType');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),["class" => "ui primary button"]) ?>
    <?= $this->Form->end() ?>
</div>
