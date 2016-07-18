<div class="contact view large-9 medium-8 columns content">
    <h3 style="display:inline-block;"><?= h("Contact View") ?></h3>
    <div class="ui breadcrumb" style="float:right;">
        <a class="section"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?> </a>
        <div class="divider"> / </div>
        <div class="section"><?= $this->Html->link(__('List '), ['action' => 'index']) ?> </div>
        
    </div>
    
    <table class="ui celled table">
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
