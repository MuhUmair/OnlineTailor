<!-- Content -->
        <!--Top-->
        <div class="ui center aligned segment margin-header OTParallex" style="background-image: url(img/home/homeParallex.png);background-position: center;background-size: 100% 100%; background-repeat: no-repeat;" >
            <div class="ui container grid">
                <div class="eleven wide column left aligned hidden-xs paddingR0">
                    <div class="ui padded segment remove-border translatebg" style="padding-top: 0px;padding-right: 0px;">
                        <div class="container home-blue-handle" style="">
                            <div class="ui padded segment remove-border translatebg" >
                                <h1 class="ui header color-white">MY Tailor helps you find <span class="hidden-sm">expert </span>Tailor</h1>
                                <p class="color-white" style="font-size: 24">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span class="hidden-sm">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                                </p>
                            </div>
                            <form class="ui form" method="POST" action="<?php echo $this->Url->build(["controller" => "design","action" => "index"]);?>">
                                <div class="ui grid">
                                    <!--
                                    <div class="eleven wide column " style="padding-left:2em;">
                                        <h1 class="ui header color-white">Coming Soon</h1>
                                        
                                    </div>
                                    -->
                                    
                                    <?php if(isset($cUser) && $cUser['userType'] != 1 ){ ?>
                                    <div class="six wide column home-city-padding-handle ">
                                        
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <input type="text" class="remove-border-radius " name="design_city" placeholder="City">
                                            
                                        </div>
                                    </div>
                                    <div class="six wide column home-design-name-padding-handle " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field ">
                                                <input type="text" class="remove-border-radius " name="design_name" placeholder="Design Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four wide column">
                                        <div class="ui padded segment remove-border paddingT0 translatebg" style="padding-left: 0px;">
                                            <button class="ui grey button remove-border-radius hvr-rotate">Find <span class="visible-lg-inline-block">Now</span></button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sixteen wide column left aligned visible-xs">
                    <div class="container home-blue-handle" style="">
                        <div class="ui padded segment remove-border translatebg" >
                            <h1 class="ui header">MY Tailor helps you find expert Tailor</h1>
                            <p style="font-size: 24">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <form class="ui form">
                            <div class="ui grid">
                                <div class="six wide column home-city-padding-handle ">
                                    <div class="ui padded segment remove-border paddingT0 translatebg">
                                        <select class="ui fluid dropdown remove-border-radius">
                                            <option value="">City</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="six wide column home-design-name-padding-handle " style="">
                                    <div class="ui padded segment remove-border paddingT0 translatebg">
                                        <div class="field">
                                            <input type="text" class="remove-border-radius" name="design-name" placeholder="Design Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="four wide column">
                                    <div class="ui padded segment remove-border paddingT0 translatebg" style="padding-left: 0px;">
                                        <button class="ui grey button remove-border-radius">Find <span class="visible-lg-inline-block">Now</span></button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <?php if(isset($cUser) && $cUser['userType'] != 1 ){ ?>
                <div class="five wide column hidden-xs">
                    <div class="ui padded segment grid remove-border translatebg paddingL0">
                        <div class="ui padded segment sixteen wide column remove-border paddingT0 floatR home-banner-btns translatebg " style="padding-top: 0px;">
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
                </div>
                <?php } ?>
            </div>
        </div>
        <!--/Top-->
        
        <div class="ui center aligned segment OTParallex remove-border" style="margin: 0px">
            <div class="ui container grid">
                <div class="three column row">
                    <div class="column sx-sixteen">
                        <div class="ui padded segment remove-border">
                            
                            <img class="ui centered tiny circular image hvr-ripple-out" src="img/square-image.png">
                            <h2 class="ui header main-text-color">Simple & Secure</h2>
                            <p class="text-color1">Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        </div>
                    </div>
                    <div class="column sx-sixteen">
                        <div class="ui padded segment remove-border">
                            
                            <img class="ui centered tiny circular image" src="img/square-image.png">
                            <h2 class="ui header main-text-color">Perfect and Latest</h2>
                            <p class="text-color1"> Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        </div>
                    </div>
                    <div class="column sx-sixteen">
                        <div class="ui padded segment remove-border">
                            
                            <img class="ui centered tiny circular image" src="img/square-image.png">
                            <h2 class="ui header main-text-color">Good Fit Guarantee</h2>
                            <p class="text-color1">Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ui center aligned segment OTParallex remove-border" style="margin: 0px;background-color: #ededeb;">
            <div class="ui container grid paddingTB3rem" style="">
                <div class="three column row">
                    <div class="sx-sixteen column">
                        <h4 class="marginL12 ui left aligned header text-color1">What people say about tailors</h4>
                        <div class="OTSlider marginL12">
                            <div class="ui people shape ">
                                <div class="sides">
                                <?php 
                                    $i = 0;
                                    foreach ($sayings as $saying): 
                                    if($saying['type'] == 1){
                                ?>
                                    <div class="<?php if ($i == 0){ echo "active"; $i = 1;}?> side">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="header">
                                                    <?php echo $saying['name'];?>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        <?php echo $saying['description'];?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <span class="right floated">
                                                    <?php echo $saying['city'];?> in 2014
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php } endforeach; ?>
                                </div>
                            </div>   
                            <i class="angle left icon"></i>
                            <i class="angle right icon"></i>
                        </div>
                    </div>
                    
                    <div class="column sx-sixteen"> 
                        <h4 class="marginL12 ui left aligned header text-color1">What people say about us</h4>
                        <div class="OTSlider marginL12">
                            <div class="ui people shape ">
                                <div class="sides">
                                    <?php 
                                    $i = 0;
                                    foreach ($sayings as $saying): 
                                    if($saying['type'] == 2){
                                ?>
                                    <div class="<?php if ($i == 0){ echo "active"; $i = 1;}?> side">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="header">
                                                    <?php echo $saying['name'];?>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        <?php echo $saying['description'];?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <span class="right floated">
                                                    <?php echo $saying['city'];?> in 2014
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php } endforeach; ?>
                                
                                </div>
                            </div>   
                            <i class="angle left icon"></i>
                            <i class="angle right icon"></i>
                        </div>
                    </div>
                    
                    <div class="column sx-sixteen hidden-sm ui left aligned ">
                        <h1 class="marginL12 ui left aligned header main-text-color" style="margin-top: 25px;margin-left: 0px !important;font-weight: normal;">
                            My tailors has tailor with in 10 miles of 93.7% of the uae population.
                        </h1>
                        <p class="ui left aligned text-color2">
                            Chances are you might know someone who has used My Tailor
                        </p>
                        <div class="ui padded segment remove-border paddingT0 translatebg" style="padding-left: 0px;">
                            <button class="ui grey button remove-border-radius">Find a Tailor <span class="visible-lg-inline-block">Now</span></button>
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
        
        <!-- /Content -->
        