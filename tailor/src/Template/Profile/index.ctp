<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profile index large-9 medium-8 columns content" style="display:none;">
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
<?php echo $this->element('sidebar-top'); ?>
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 0px; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;">Top Rated Tailor</h1>
                        
                    </div>
                    <div class="ui container grid">
                        <?php foreach ($profile as $profile): ?>
                        <div class="ui segment fifteen wide mobile  fifteen wide tablet seven wide computer column remove-border-radius marginL0-lg " style="padding: 0px;margin: 1em;">
                            <div class="ui left aligned segment remove-border">
                                <div class="ui container grid paddingL0">
                                    <div class="three column row">
                                    
                                        <div class="sixteen wide mobile  sixteen wide tablet sixteen wide computer column paddingL0">
                                            <?php if(isset($profile->avatar) && $profile->avatar != "") { ?>
                                                <img class="ui left floated image" style="width: 100%;" id="main-img" src="<?php echo $TailorBaseURL."/". $profile->avatar ?>">
                                            <?php }else { ?>
                                                <img class="ui left floated image" style="width: 100%;" id="main-img" src="<?php echo $TailorBaseURL."/" ?>img/dark-gradient.png">
                                            <?php } ?>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <h2 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">
                                    <?= $this->Html->link( h($profile->user->fName ." " . $profile->user->lName), ['action' => 'view', $profile->id],["style" => "color:black;"]) ?>
                                </h2>
                                <div class="ui large star rating floatR" style="margin-top: 10px;" data-rating="<?php echo $profile->avrRating?>" data-max-rating="5" data-pid="<?php echo $profile->id ?>"></div>
                                <p><?= h($profile->detail)?></p>
                                
                            </div>
                            <div class="ui container grid left aligned segment remove-border">
                                <div class="two column row">
                                    <div class="column">
                                        <i class="icon large user" aria-hidden="true" style="margin-top: -5px;"></i>
                                        <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($profile->city ." ". $profile->country) ?></h3>
                                    </div>
                                    <div class="column">
                                        <i class="icon large bookmark" aria-hidden="true" style="margin-top: -5px;"></i>
                                        <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Golden Member</h3>
                                    </div>
                                    
                                </div>
                                <div class="one column row">
                                    <div class="column">
                                       <div class="ui compact menu remove-border-radius remove-box-shedow remove-border">
                                            <a class="item label-orange-blackBG-color color-white">
                                                View Design
                                            </a>
                                            <div class="ui tag labels rigth-arrow remove-circle ">
                                                <?= $this->Html->link( __('View Profile'), ['action' => 'view', $profile->id],[ "class"=> "ui label product-detail-label label-blue-blackBG-color color-white"]) ?>
                                                
                                            </div>
                                        </div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php echo $this->element('sidebar-bottom'); ?>
        <script>
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