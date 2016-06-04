<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
        </title>
    <?= $this->Html->meta('icon') ?>
        
    <?= $this->Html->css('semantic.css') ?>
    <?= $this->Html->css('OnlineTailor.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('semantic.js'); ?>
    </head>
    <body>
        <style>
            .color-white{
                color: #ffffff !important;
            }
            .main-text-color{
                color: #f46522 !important;
            }
            .text-color1{
                color: #515151 !important;
            }
            .text-color2{
                color: #515151 !important;
            }
            .bg-color1{
                color: #4a89dc !important;
            }
            .bg-color2{
                color: #ffffff !important;
            }
            .bg-color3{
                color: #ededeb !important;
            }
            
        </style>
        <!--header-->
        <header >
            <div class="ui fluid secondary large top fixed stackable menu" style="background-color: #FFFFFF; border: #DEDEDE solid 1px; ">
                <div class="ui container">
                    <div class="header item">
                        <div class="ui dropdown item visible-xs-flex" tabindex="0">
                            <i class="sidebar icon"></i>
                            <div class="menu transition hidden" tabindex="-1">
                                <a class="item">Find a tailor</a>
                                <a class="item">Find tailors</a>
                                <a class="item">About Us</a>
                            </div>
                        </div>
                        <a href="<?php echo $this->Url->build(["controller" => "home","action" => "index"]);?>">
                            <?= $this->Html->image('logo.png',array('class' => 'hidden-xs', 'style' => 'width: 180px;'));?>
                        </a>
                        
                    </div>
                    
                    <div class="ui dropdown item hidden-xs" tabindex="0">
                        
                        Find a tailor <i class="dropdown icon"></i>
                        <!--                        <div class="menu transition hidden" tabindex="-1">
                                                    <div class="header item">
                                                        <form class="ui form">
                                                            <div class="field">
                                                                <label>First Name</label>
                                                                <input type="text" name="first-name" placeholder="First Name">
                                                            </div>
                                                            <div class="field">
                                                                <label>Last Name</label>
                                                                <input type="text" name="last-name" placeholder="Last Name">
                                                            </div>
                                                            <div class="field">
                                                                <div class="ui checkbox">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>I agree to the Terms and Conditions</label>
                                                                </div>
                                                            </div>
                                                            <button class="ui button" type="submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>-->
                    </div>
                    <div class="ui dropdown item hidden-xs" tabindex="0">
                        Find tailors <i class="dropdown icon"></i>
                        <div class="menu transition hidden" tabindex="-1">
                            <a class="item" href="tailors.html">Tailors</a>
                            <a class="item" href="tailor_designs.html">Designs</a>
                            <a class="item" href="tailor_orders.html">Tailor Orders</a>
                            <a class="item" href="tailor_profile.html">Tailor Profile</a>
                            <a class="item" href="design_detail.html">Dress Detail</a>
                        </div>
                    </div>
                    <a class="ui item hidden-xs">
                        About Us
                    </a>
                    <div class="right item visible-lg-flex hidden-xs">
                        <a class="ui ">
                            <?php echo $cContact[0]['contactNo']?>
                        </a>
                        <?php if(isset($cUser)){ ?>
                            <div class="ui item ">
                                <a href="<?php echo $this->Url->build(["controller" => "users","action" => "logout"]);?>"><button class="ui basic button">Logout</button></a>
                            </div>
                        <?php } ?>
                        <?php if(!isset($cUser)){ ?>
                            <a href="<?php echo $this->Url->build(["controller" => "users","action" => "login"]);?>" class="ui item">
                                Login
                            </a>

                            <div class="ui item ">
                                <a href="<?php echo $this->Url->build(["controller" => "users","action" => "signup"]);?>"><button class="ui basic button">Signup</button></a>
                            </div>
                        <?php } ?>
                        <?php if(isset($cUser) && $cUser['userType'] == 3 ){?>
                            <a href="<?php echo $this->Url->build(["controller" => "peoplesaying","action" => "index"]);?>" class="ui ">
                                Admin
                            </a>
                        <?php } ?>
                        
                    </div>
                    <div class="right item visible-md-flex visible-sm-flex visible-xs-flex hidden-xs">
                        <div class="ui simple  right dropdown item">
                            Login
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="ui item">
                                    (123) 123-1234
                                </a>
                                <a href="<?php echo $this->Url->build(["controller" => "users","action" => "login"]);?>" class="ui item">
                                    Login
                                </a>
                                <a href="<?php echo $this->Url->build(["controller" => "users","action" => "signup"]);?>" class="ui item">
                                    Signup
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
        <!--/header-->
        
    <?= $this->Flash->render() ?>
        <div class="container clearfix">
        <?= $this->fetch('content') ?>
        </div>
        <footer>
            <div class="ui center aligned segment OTParallex remove-border" style="margin: 0px;background-color: #508aba;">
                <div class="ui center aligned centered grid container paddingTB3rem " style="">
                    <div class="ui centered grid" style="width: 100%;">
                        <div class="eight wide tablet eight wide computer column">
                            <div class="ui centered grid">
                                <div class="sixteen wide mobile five wide computer column paddingT0">
                                    <div class="ui link list">
                                        <div class="active item text-color1">GET TO KNOW US</div>
                                        <a class="item color-white">About Us</a>
                                        <a class="item color-white">Reviews & Testimonials</a>
                                        <a class="item color-white">Safety</a>
                                        <a class="item color-white">Security</a>
                                        <a class="item color-white">News</a>
                                        <a class="item color-white">Contact Us</a>
                                        
                                    </div>
                                </div>
                                <div class="sixteen wide mobile five wide computer column paddingT0">
                                    <div class="ui link list">
                                        <div class="active item text-color1">LEARN WITH US</div>
                                        <a class="item color-white">Search for a Tailor</a>
                                        <a class="item color-white">Request a Tailor</a>
                                        
                                    </div>
                                </div>
                                <div class="sixteen wide mobile five wide computer column paddingT0">
                                    <div class="ui link list">
                                        <div class="active item text-color1">WORK WITH US</div>
                                        <a class="item color-white">About Us</a>
                                        <a class="item color-white">Become a Tailor</a>
                                        <a class="item color-white">Partners</a>
                                        <a class="item color-white">Affiliates</a>
                                        <a class="item color-white">Careers</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="ui small images" style="padding-left: 1rem;margin-top: 20px;">
                                <?= $this->Html->image('bbb-logo.png',array('class' => 'ui image'));?>
                                <?= $this->Html->image('ssl_verisign.png',array('class' => 'ui image'));?>
                            </div>
                            
                            <div class="ui mini images" style="padding-left: 1rem;margin-top: 20px;">
                                <a href="http://<?php echo $cSocialeMedia[0]["link"]?>" target="_blank"><?= $this->Html->image('footer/facebook-logo-button.png',array('class' => 'ui image marginL15'));?></a>
                                <a href="http://<?php echo $cSocialeMedia[1]["link"]?>" target="_blank"><?= $this->Html->image('footer/twitter-logo-button.png',array('class' => 'ui image marginL15'));?></a>
                                <a href="http://<?php echo $cSocialeMedia[2]["link"]?>" target="_blank"><?= $this->Html->image('footer/linkedin.png',array('class' => 'ui image marginL15'));?></a>
                                <a href="http://<?php echo $cSocialeMedia[3]["link"]?>" target="_blank"><?= $this->Html->image('footer/youtube-logotype.png',array('class' => 'ui image marginL15'));?></a>
                                
                            </div>
                            
                        </div>
                        <div class="eight wide tablet eight wide computer column" style="">
                            <div class="ui centered grid" style="width: 100%;">
                                
                                <div class="sixteen wide tablet sixteen wide computer column" style="background-color: #5d9cec;">
                                    <h4 class="marginL12 ui left aligned header color-white" style="margin-left: 0px !important;">
                                        Find a Tailor fast, Get the app.
                                    </h4>
                                    <p class="color-white">Send a download link to your phone</p>
                                    
                                    <form>
                                        <div class="ui form">
                                            
                                            <div class="fields">
                                                <div class="eight wide field">
                                                    <input type="text" placeholder="(877)999-2681">
                                                </div>
                                                
                                                <div class="two wide field">
                                                    <button class="ui orange button">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="color-white">Message and data rates may apply</p>
                                    <div class="ui large horizontal divided list">
                                        <div class="item">
                                            <?= $this->Html->image('technology.png',array('class' => 'ui image marginL15'));?>
                                            <div class="content">
                                                <!--<div class="header color-white">App Store</div>-->
                                                <div class="header color-white">Coming Soon</div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            
                                            <?= $this->Html->image('play-store.png',array('class' => 'ui image marginL15'));?>
                                            <div class="content">
                                                <!--<div class="header color-white">Google Play</div>-->
                                                <div class="header color-white">Coming Soon</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--
                                <div class="sixteen wide tablet sixteen wide computer right floated column mar" style="background-color: #5d9cec;margin-top: 20px;">
                                    <h4 class="marginL12 ui left aligned header color-white" style="margin-left: 0px !important;">
                                        Need help dinging a Tailor
                                    </h4>
                                    
                                    <form>
                                        <div class="ui form">
                                            
                                            <div class="fields">
                                                <div class="five wide field">
                                                    <button class="fluid ui olive button">Green</button>
                                                </div>
                                                
                                                <div class="six wide field">
                                                    <div class="ui large horizontal divided list">
                                                        <div class="item">
                                                            <img class="ui image" src="img/phone-receiver.png">
                                                            <div class="content">
                                                                <div class="header color-white">Google Play</div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            $(function(){
                $('.ui.dropdown').dropdown();
                $(".OTSlider >i:nth-child(2)").click(function(){
                    $('.shape').shape('flip left');
                });
                $(".OTSlider >i:nth-child(3)").click(function(){
                    $('.shape').shape('flip right');
                });
                
            });
        
        </script>
    </body>
</html>
