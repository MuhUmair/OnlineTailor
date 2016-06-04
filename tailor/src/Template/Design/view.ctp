<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Design'), ['action' => 'edit', $design->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Design'), ['action' => 'delete', $design->id], ['confirm' => __('Are you sure you want to delete # {0}?', $design->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Design'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="design view large-9 medium-8 columns content" style="display:none;">
    <h3><?= h($design->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('DesignName') ?></th>
            <td><?= h($design->designName) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($design->description) ?></td>
        </tr>
        <tr>
            <th><?= __('FabricName') ?></th>
            <td><?= h($design->fabricName) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($design->id) ?></td>
        </tr>
        <tr>
            <th><?= __('TailorID') ?></th>
            <td><?= $this->Number->format($design->tailorID) ?></td>
        </tr>
        <tr>
            <th><?= __('DesignTypeID') ?></th>
            <td><?= $this->Number->format($design->designTypeID) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($design->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($design->price) ?></td>
        </tr>
    </table>
</div>
<!--Top-->
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
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;">Moroccan Dress Name</h1>
                        
                    </div>
                    <div class="ui segment remove-border-radius" style="padding: 0px">
                        <div class="ui left aligned segment remove-border">
                            <div class="ui container grid paddingL0">
                                <div class="three column row">
                                    <div class="twelve wide mobile  twelve wide tablet twelve wide computer column paddingL0">
                                        <?= $this->Html->image('parallex2.png',array('class' => 'ui left floated image', 'style' => 'width: 100%;', "id" => "main-img"));?>
                                        
                                    </div>
                                    <div class="two wide mobile  two wide tablet two wide computer column paddingL0 slider-img-container">
                                        <?= $this->Html->image('home/homeParallex.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '1'));?>
                                        <?= $this->Html->image('parallex2.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '2'));?>
                                        <?= $this->Html->image('parallex3.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '3'));?>
                                        <?= $this->Html->image('home/homeParallex.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '4'));?>
                                    </div>
                                    <div class="two wide mobile  two wide tablet two wide computer column paddingL0 slider-img-container">
                                        <?= $this->Html->image('parallex2.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '5'));?>
                                        <?= $this->Html->image('home/homeParallex.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '6'));?>
                                        <?= $this->Html->image('parallex2.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '7'));?>
                                        <?= $this->Html->image('parallex3.png',array('class' => 'ui tiny left floated image', 'data-imgindex' => '8'));?>

                                    </div>
                                </div>
                                
                            </div>
                            
                            <h2 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($design->designName) ?></h2>
                            <h3 class="ui header main-text-color" style="display: inline-block;font-weight: normal;margin-top: 0px;margin-left: 20px;">AED <?= $this->Number->format($design->price) ?></h3>
                            <div class="ui large star rating" style="margin-left: 20px;"></div>
                            <p><?= h($design->description) ?></p>
                            
                        </div>
                        <div class="ui container grid left aligned segment remove-border">
                            <div class="three column row">
                                <div class="column">
                                    <i class="icon large user" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Designer name</h3>
                                </div>
                                <div class="column">
                                    <i class="icon large bookmark" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">Moroccan Design</h3>
                                </div>
                                <div class="column">
                                    
                                    <i class="icon large cut" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($design->fabricName) ?></h3>
                                </div>
                            </div>
                            
                                <div class="three column row">
                                    
                                    <div class="column">
                                        <?php if(!isset($cUser) || $cUser["userType"] == 2 || $cUser["userType"] == 3) { ?>
                                        <div class="ui tag labels rigth-arrow remove-circle ">
                                            <a class="ui label product-detail-label label-blue-blackBG-color color-white">
                                                Order Now
                                            </a>
                                        </div>
                                        <?php } else if(isset($cUser) || $cUser["userType"] == 1){ ?>
                                        <div class="ui tag labels rigth-arrow remove-circle ">
                                            <?= $this->Html->link(__('Edit Design'), ['action' => 'edit', $design->id], ["class" => "ui label product-detail-label label-blue-blackBG-color color-white"]) ?> 
                                            
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="column">
                                        
                                    </div>
                                    <div class="column">

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
                var imageIndex = 1;
                $(document).ready(function() {
                    $(".slider-img-container img").hover(function(){
                        $('#main-img').attr('src',$(this).attr('src').replace('thumb/', ''));
                        imageIndex = $(this).data("imgindex");
                    });
                    var imgSwap = [];
                    $(".slider-img-container img").each(function(){
                        imgUrl = this.src.replace('thumb/', '');
                        imgSwap.push(imgUrl);
                    });
                    $(imgSwap).preload();
                });
                $.fn.preload = function() {
                    this.each(function(){
                        $('<img/>')[0].src = this;
                    });
                }
            </script>