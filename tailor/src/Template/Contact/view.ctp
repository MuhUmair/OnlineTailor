<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contact view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th><?= __('ContactNo') ?></th>
            <td><?= h($contact->contactNo) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($contact->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($contact->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($contact->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
    </table>
</div>
