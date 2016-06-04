<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display:none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Design'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="design form large-9 medium-8 columns content" style="display:none;">
    <?= $this->Form->create($design) ?>
    <fieldset>
        <legend><?= __('Add Design') ?></legend>
        <?php
            echo $this->Form->input('tailorID');
            echo $this->Form->input('designName');
            echo $this->Form->input('description');
            echo $this->Form->input('fabricName');
            echo $this->Form->input('designTypeID');
            echo $this->Form->input('status');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
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
                                                <?= $this->Html->link(__('Back to Home'), ['action' => 'index'],["class" => "remove-circle ui label floatR color-white label-blackBG-color", "style" => "font-size: 14px;"]) ?>
                                                
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
                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="text-align: left;">
                    
                    <div class="design form large-9 medium-8 columns content">
                        <?= $this->Form->create($design, ["class" => "ui form"]) ?>
                        <fieldset style="border:none;">
                            <?php
                                echo $this->Form->hidden('tailorID',["value" => $cUser['id']]);
                                echo $this->Form->input('designName');
                                echo "<br />";
                                echo $this->Form->input('description');
                                echo "<br />";
                                echo $this->Form->input('fabricName');
                                echo "<br />";
                                echo $this->Form->input('designTypeID');
                                echo "<br />";
                                echo $this->Form->input('status');
                                echo "<br />";
                                echo $this->Form->input('price');
                            ?>
                        </fieldset>
                        <div class="ui tag labels rigth-arrow remove-circle " style="display:inline-block;">
                        <?= $this->Form->button(__('Submit'), ["class" => "ui label product-detail-label label-blue-blackBG-color color-white"]) ?>
                        </div>
                        
                        <?= $this->Form->end() ?>
                        
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
