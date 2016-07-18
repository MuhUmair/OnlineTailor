<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('fName', array( 'label' => false ));
            echo $this->Form->input('lName', array( 'label' => false ));
            echo $this->Form->input('email', array( 'label' => false ));
            echo $this->Form->input('phone', array( 'label' => false ));
            echo $this->Form->input('password', array( 'label' => false ));
            echo $this->Form->input('city', array( 'label' => false ));
            echo $this->Form->input('country', array( 'label' => false ));
            echo $this->Form->input('isNews', array( 'label' => false ));
            echo $this->Form->input('userType', [
                'options' => ['1' => 'Tailor', '2' => 'Customer']
            ], array( 'label' => false ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
