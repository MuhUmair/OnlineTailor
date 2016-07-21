<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Tailors') ?></h3>
    <form action="<?php echo $this->Url->build(["controller" => "users","action" => "index"]);?>" method="post">  
        <input type='text' name='tailor_name' placeholder="Name" />
        <input type='text' name='MType' placeholder="Member Type" />
        <input type='hidden' name='uType' value="<?php echo $user->uType ?>" placeholder="Member Type" />
        <input type='submit'  value="search" />
    </form>
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
                <th><?= $this->Paginator->sort('mType',["label" => "Member Type"]) ?>
                    
                </th>
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
                            echo "Free";
                        }else if($t == '2'){
                            echo "Silver";
                        }else if($t == '3'){
                            echo "Gold";
                        }
                    ?>
                </td>
                <td><?php 
                        $t = $user->isActive;
                        if($t == '0'){
                            echo "Publish";
                        }else if($t == '1'){
                            echo "Unpublished";
                        }
                    ?></td>
                <td class="actions">
                    <div class="ui breadcrumb">
                        <?= $this->Html->link(__('Change Status'), ['action' => 'edit', $user->id],["class" => "section"]) ?>
                        
                        <div class="divider"> / </div>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete')],["class" => "section"]) ?>
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
