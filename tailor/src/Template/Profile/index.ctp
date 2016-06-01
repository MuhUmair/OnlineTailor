<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profile index large-9 medium-8 columns content">
    <h3><?= __('Profile') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('ratingAvg') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('memberType') ?></th>
                <th><?= $this->Paginator->sort('telephone') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('happyCustomerCount') ?></th>
                <th><?= $this->Paginator->sort('lat') ?></th>
                <th><?= $this->Paginator->sort('glong') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profile as $profile): ?>
            <tr>
                <td><?= $this->Number->format($profile->id) ?></td>
                <td><?= $this->Number->format($profile->ratingAvg) ?></td>
                <td><?= h($profile->city) ?></td>
                <td><?= h($profile->country) ?></td>
                <td><?= h($profile->address) ?></td>
                <td><?= $this->Number->format($profile->memberType) ?></td>
                <td><?= h($profile->telephone) ?></td>
                <td><?= h($profile->mobile) ?></td>
                <td><?= $this->Number->format($profile->happyCustomerCount) ?></td>
                <td><?= h($profile->lat) ?></td>
                <td><?= h($profile->glong) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
