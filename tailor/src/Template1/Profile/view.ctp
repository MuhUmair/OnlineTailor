<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profile view large-9 medium-8 columns content" style="display:none;">
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
<?php echo $this->element('sidebar-top'); ?>                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="ui segment remove-border headingBG-black remove-border-radius" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu color-white visible-xs-inline-block" style='margin-top: -12px;'></i>
                        <h1 class="ui left aligned header color-white " style="font-weight: normal;display: inline-block;margin-top: 0px;"><?= h($profile->user->fName . " " . $profile->user->lName)?></h1>
                        
                    </div>
                    <div class="ui segment remove-border-radius" style="padding: 0px">
                        <div class="ui left aligned segment remove-border">
                            
                            <img src="<?= $profile->avatar?>" class="ui Medium left floated image" width="300" />
                            <?php if(isset($cUser) && $profile["user"]["userType"] == "1") { ?>
                                <h1 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Tailor Story</h1>
                            <?php }else { ?>
                                <h1 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Detail</h1>
                            <?php } ?>
                            <?php if(isset($cUser) && $cUser["id"] == $profile->user_id) { ?>
                                <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id],["style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]) ?> 
                            <?php } ?>
                            <p><?= h($profile->detail)?></p>
                            
                        </div>
                        <div class="ui container grid left aligned segment remove-border">
                            <div class="three column row">
                                <div class="column">
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;">Tailor Rating</h3>
                                    <div class="ui large star rating" data-rating="<?php echo $profile->avrRating?>" data-max-rating="5" data-pid="<?php echo $profile->id ?>"></div>
                                    
                                </div>
                                <div class="column">
                                    <i class="icon large marker" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($profile->city . ", " . $profile->country)?></h3>
                                </div>
                                <div class="column">
                                    
                                    <i class="icon large add user " aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Golden Member</h3>
                                </div>
                            </div>
                            <div class="three column row">
                                <div class="column">
                                    <i class="icon large at" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($profile->user->email)?></h3>
                                </div>
                                <div class="column">
                                    <i class="icon large phone" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($profile->user->phone)?></h3>
                                </div>
                                <div class="column">
                                    
                                    <i class="icon large male" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($profile->happyCustomerCount)?> Happy users</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $this->element('sidebar-bottom'); ?>
        <script type="text/javascript">
            $(function(){
                var user_id = "<?php echo $cUser['id']?>";
                $('.rating')
                        .rating({
                            initialRating: 2,
                    maxRating: 5
                }).rating(
                            'setting', 
                            'onRate', 
                            function(value) {
                                var profile_id = $(this).data("pid");
                                //alert( design_id );
                                $.ajax({
                                    method: "POST",
                                    url: "<?php echo $this->Url->build(["controller" => "profile","action" => "rated"]);?>",
                                    data: { userID: user_id , profileID: profile_id , rating: value }
                                })
                                .done(function( msg ) {
                                      //alert( "Data Saved: " + msg );
                                });
                            }
                        );
                
            });
        
        </script>