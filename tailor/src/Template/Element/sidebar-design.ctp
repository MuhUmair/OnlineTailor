<div class="ui sidebar inverted vertical menu">
            <a href="<?php echo $this->Url->build(["controller" => "profile","action" => "view"]);?>" class="item">
                Profile
            </a>
            <a href="<?php echo $this->Url->build(["controller" => "design","action" => "index"]);?>"  class="item">
                Design
            </a>
            <?php if(isset($cUser) && $cUser['userType'] == 1 ){ ?>
                <a href="<?php echo $this->Url->build(["controller" => "size","action" => "index"]);?>"  class="item">
                    Size
                </a>
            <?php } ?>
            <!--
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
            -->
        </div>
        <!--Top-->
        <div class="ui center aligned segment margin-header OTParallex" style="background-image: url(<?php echo $TailorBaseURL;?>/img/home/homeParallex.png);background-position: center;background-size: 100% 100%; background-repeat: no-repeat;" >
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
                                                <?php if($this->request->params['action'] != 'index'){ ?>
                                                    <?= $this->Html->link(__('Back to '. $this->request->params['controller'].'s'), ['action' => 'index'],["class" => "remove-circle ui label floatR color-white label-blackBG-color", "style" => "font-size: 14px;"]) ?>
                                                <?php }else{ ?>
                                                    <?= $this->Html->link(__('Back to Home'), ['controller' => 'home', 'action' => 'index'],["class" => "remove-circle ui label floatR color-white label-blackBG-color", "style" => "font-size: 14px;"]) ?>
                                                <?php } ?>
                                                <?php //print_r( $this->request->params) ?>
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
                                <div class="ui dropdown item">
                                    <span class="text"><i class="dropdown icon"></i> Mokawar</span>
                                    <div class="menu">
                                        <div class="scrolling menu">
                                            <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/2"]);?>">
                                                <div class="ui grey empty circular label"></div>
                                                Printed
                                                
                                            </a>
                                            <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/3"]);?>">
                                                <div class="ui grey empty circular label"></div>
                                                Model
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ui small item menu">
                                <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/4"]);?>">
                                    <span class="text-color1">Jalabeya</span>
                                </a>
                                
                            </div>
                            <div class="ui small item menu">
                                <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/5"]);?>">
                                    <span class="text-color1">Moroccan Dresses</span>
                                </a>
                                
                            </div>
                            <div class="ui small item menu">
                                <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/6"]);?>">
                                    <span class="text-color1">Dresses</span>
                                </a>
                                
                            </div>
                            <div class="ui small item menu">
                                <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/7"]);?>">
                                    <span class="text-color1">Dantail</span>
                                </a>
                                
                            </div>
                            <div class="ui small item menu">
                                <a class="item" href="<?php echo $this->Url->build(["controller" => "design","action" => "index/8"]);?>">
                                    <span class="text-color1">Abaya</span>
                                </a>
                                
                            </div>
                            
                    </div>
                </div>
                
        