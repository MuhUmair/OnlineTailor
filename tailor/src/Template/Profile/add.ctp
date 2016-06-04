<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profile form large-9 medium-8 columns content">

    <?= $this->Form->create($profile, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Profile') ?></legend>
        <?php
            echo $this->Form->input('detail');
            echo $this->Form->input('ratingAvg');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('address');
            echo $this->Form->input('memberType');
            echo $this->Form->input('telephone');
            echo $this->Form->input('mobile');
            echo $this->Form->input('happyCustomerCount');
            echo $this->Form->input('lat');
            echo $this->Form->input('glong');
            echo $this->Form->input('avatar', ['type' => 'file']);
        ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
<img src="http://xampp\htdocs\OnlineTailor\tailor\webroot\media\profiles\Hrithik-Roshan_4.jpg" />
</div>
