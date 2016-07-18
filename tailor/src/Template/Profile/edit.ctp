<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profile form large-9 medium-8 columns content" style="display:none;">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Edit Profile') ?></legend>
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
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php echo $this->element('sidebar-top'); ?>
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="text-align: left;">
                    
                    <div class="design form large-9 medium-8 columns content">
                        <?= $this->Form->create($profile, ["class" => "ui form",'type' => 'file']) ?>
                        <fieldset style="border:none;">
                            <?php
                                echo $this->Form->hidden('tailorID',["value" => $cUser['id']]);
                                echo $this->Form->hidden('ratingAvg');
                                echo $this->Form->hidden('memberType');
                                echo $this->Form->hidden('happyCustomerCount');
                                echo $this->Form->hidden('lat');
                                echo $this->Form->hidden('glong');
                                echo "<label>First Name </label>";
                                echo $this->Form->input('user.fName', ["label" => false]);
                                echo "<br />";
                                echo "<label>Last Name </label>";
                                echo $this->Form->input('user.lName', ["label" => false]);
                                echo "<br />";
                                echo "<label>Profile Picture</label>";
                                echo $this->Form->input('avatar', ['type' => 'file', "label" => false,'required' => false]);
                                echo "<br />";
                                echo $this->Form->input('detail');
                                echo "<br />";
                                echo $this->Form->input('mobile');
                                echo "<br />";
                                echo $this->Form->input('telephone');
                                echo "<br />";
                                echo $this->Form->input('address');
                                echo "<br />";
                                echo $this->Form->input('city');
                                echo "<br />";
                                echo $this->Form->input('country');
                            ?>
                        </fieldset>
                        <?php $pId = $profile->id ;?>
                        
                        <div class="ui tag labels rigth-arrow remove-circle " style="display:inline-block;">
                        <?= $this->Form->button(__('Submit'), ["class" => "ui label product-detail-label label-blue-blackBG-color color-white"]) ?>
                        </div>
                        <?= $this->Html->link(
                                __('Change Password'),
                                ['action' => 'changepassword', $pId],
                                ["style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]
                            )
                        ?>
                        
                        <?= $this->Form->end() ?>
                        <?= $this->Html->link(
                                __('back'),
                                ['action' => 'view', $pId],
                                ["style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]
                            )
                        ?>
                        <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'delete', $profile->id],
                                ['confirm' => __('Are you sure you want to delete this design'), "style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]
                            )
                        ?>
                        
                    </div>

                </div>
                <?php echo $this->element('sidebar-bottom'); ?>
        