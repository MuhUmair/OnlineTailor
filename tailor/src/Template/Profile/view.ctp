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
<!-- Content -->
        <div class="ui sidebar inverted vertical menu">
            <a href="<?php echo $this->Url->build(["controller" => "profile","action" => "index"]);?>" class="item">
                Profile
            </a>
            <a href="<?php echo $this->Url->build(["controller" => "design","action" => "index"]);?>"  class="item">
                Design
            </a>
            <a href="<?php echo $this->Url->build(["controller" => "order","action" => "index"]);?>"  class="item">
                Orders
            </a>
            <a class="item">
                Pending Orders
            </a>
            <a class="item">
                History
            </a>
            <a class="item">
                Payments
            </a>
            <a class="item">
                Other
            </a>
        </div>
        <!--Top-->
        <div class="ui center aligned segment margin-header OTParallex" style="background-image: url(img/home/homeParallex.png);background-position: center;background-size: 100% 100%; background-repeat: no-repeat;" >
            <div class="ui container grid">
                <div class="sixteen wide column left aligned paddingR0 paddingB0">
                    <div class="ui padded segment remove-border translatebg paddingB0" style="">
                        <div class="container home-blue-handle paddingT0 paddingB0" style="margin-right: 2em">
                            <div class="ui padded segment remove-border translatebg" >
                                
                                <div class="ui grid">
                                    <div class="two column row">
                                        <div class="left floated column">
                                            <h1 class="ui header color-white">Tailor Profile</h1>
                                        </div>
                                        <div class="right floated column">
                                            <div class="remove-circle ui tag labels">
                                                <a class="remove-circle ui label floatR color-white label-blackBG-color" style="font-size: 14px;">
                                                    Back to Home
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--/Top-->
        
        <div class="ui center aligned segment OTParallex remove-border" style="margin: 0px">
            <div class="ui container grid">
                <div class="four wide computer column hidden-xs">
                    <div class="ui padded segment sixteen wide column remove-border paddingT0 home-banner-btns translatebg " style="padding-top: 0px;">
                        <div class="ui small item menu ">
                            <!--<a class="item">
                                <span class="text-color1 text">Mokawar</span>
                            </a>-->
                            <a href="<?php echo $this->Url->build(["controller" => "profile","action" => "index"]);?>" class="item">
                                <span class="text">Profile</span>
                            </a>

                        </div>
                        
                        <div class="ui small item menu">
                            <a href="<?php echo $this->Url->build(["controller" => "design","action" => "index"]);?>"  class="item">
                                <span class="text-color1">Design</span>
                            </a>
                            
                        </div>
                        <div class="ui small item menu">
                            <a href="<?php echo $this->Url->build(["controller" => "order","action" => "index"]);?>"  class="item">
                                <span class="text-color1">Orders</span>
                            </a>
                            
                        </div>
                        <div class="ui small item menu">
                            <a class="item">
                                <span class="text-color1">Pending Orders</span>
                            </a>
                            
                        </div>
                        <div class="ui small item menu">
                            <a class="item">
                                <span class="text-color1">History</span>
                            </a>
                            
                        </div>
                        <div class="ui small item menu">
                            <a class="item">
                                <span class="text-color1">Payments</span>
                            </a>
                            
                        </div>
                        <div class="ui small item menu">
                            <a class="item">
                                <span class="text-color1">Other</span>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="ui segment remove-border headingBG-black remove-border-radius" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu color-white visible-xs-inline-block" style='margin-top: -12px;'></i>
                        <h1 class="ui left aligned header color-white " style="font-weight: normal;display: inline-block;margin-top: 0px;"><?= h($profile->user->fName . " " . $profile->user->lName)?></h1>
                        
                    </div>
                    <div class="ui segment remove-border-radius" style="padding: 0px">
                        <div class="ui left aligned segment remove-border">
                            <?= $this->Html->image('tailor.png',array('class' => 'ui Medium left floated image'));?>
                            
                            <h1 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Tailor Story</h1>
                            <?php if(isset($cUser) && $cUser["id"] == $profile->user_id) { ?>
                                <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id],["style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]) ?> 
                            <?php } ?>
                            <p><?= h($profile->detail)?></p>
                            
                        </div>
                        <div class="ui container grid left aligned segment remove-border">
                            <div class="three column row">
                                <div class="column">
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;">Tailor Rating</h3>
                                    <div class="ui large star rating"></div>
                                    
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
                
            </div>
        </div>
        <div class="ui center aligned segment OTParallex remove-border" style="margin: 0px;">
            <div class="ui center aligned centered grid container paddingTB3rem " style="">
                <div class="ui centered grid">
                    
                    <div class="sixteen wide row">
                        <h1 class="marginL12 ui center aligned header" style="margin-left: 0px !important;">
                            Need help? Real people will answer your call right away.
                        </h1>
                    </div>
                    <div class="sixteen wide row">
                        <p>
                            Call(877) 999-2681 or email support@mydomain.com
                        </p>
                    </div>
                    <div class="sixteen wide row">
                        <div class="ui padded segment remove-border paddingT0 translatebg" style="padding-left: 0px;">
                            <button class="ui grey button remove-border-radius">LEARN MORE ABOUT MY TAILOR<span class="visible-lg-inline-block"></span></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function(){
                $('.rating')
                        .rating({
                            initialRating: 2,
                    maxRating: 5
                });
                
            });
        
        </script>