<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profile view large-9 medium-8 columns content">
    <h3><?= h($profile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($profile->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($profile->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($profile->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone') ?></th>
            <td><?= h($profile->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($profile->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Lat') ?></th>
            <td><?= h($profile->lat) ?></td>
        </tr>
        <tr>
            <th><?= __('Glong') ?></th>
            <td><?= h($profile->glong) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
        <tr>
            <th><?= __('RatingAvg') ?></th>
            <td><?= $this->Number->format($profile->ratingAvg) ?></td>
        </tr>
        <tr>
            <th><?= __('MemberType') ?></th>
            <td><?= $this->Number->format($profile->memberType) ?></td>
        </tr>
        <tr>
            <th><?= __('HappyCustomerCount') ?></th>
            <td><?= $this->Number->format($profile->happyCustomerCount) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($profile->detail)); ?>
    </div>
</div>
