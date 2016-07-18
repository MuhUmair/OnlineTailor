<div class="contact index large-9 medium-8 columns content">
    <h3 style="display: inline-block;"><?= __('Contact') ?></h3>
    
    <table class="ui celled table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('contactNo') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contact as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->contactNo) ?></td>
                <td><?= h($contact->city) ?></td>
                <td><?= h($contact->country) ?></td>
                <td><?= h($contact->address) ?></td>
                <td class="actions">
                <div class="ui breadcrumb">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <div class="divider"> / </div>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>

                </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
