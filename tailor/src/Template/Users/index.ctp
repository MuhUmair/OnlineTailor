<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Tailors') ?></h3>
    <table class="ui celled table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('fName') ?></th>
                <th><?= $this->Paginator->sort('lName') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('mType',["label" => "Member Type"]) ?></th>
                <th><?= $this->Paginator->sort('isActive',["label" => "Active"]) ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->fName) ?></td>
                <td><?= h($user->lName) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->phone) ?></td>
                
                <td><?= h($user->city) ?></td>
                <td><?= h($user->country) ?></td>
                <td>
                    <?php 
                        $t = $user->mType;
                        if($t == '1'){
                            echo "1. Free";
                        }else if($t == '2'){
                            echo "2. Silver";
                        }else if($t == '3'){
                            echo "3. Gold";
                        }
                    ?>
                </td>
                <td><?php 
                        $t = $user->isActive;
                        if($t == '0'){
                            echo "1. Not";
                        }else if($t == '1'){
                            echo "2. Activated";
                        }
                    ?></td>
                <td class="actions">
                    <div class="ui breadcrumb">
                        <?= $this->Html->link(__('Change Status'), ['action' => 'edit', $user->id]) ?>
                    </div>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<style>
.pagination{
        list-style: none;
        padding: 0px;
}
.pagination li{
        display: inline-block;
}
</style>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
