<style>
       #map {
        width: 100%;
        height: 400px;
      }
    </style>
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
<?php echo $this->element('sidebar-top'); ?>                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;"><?= h($design->designName) ?></h1>
                        
                    </div>
                    <div class="ui segment remove-border-radius" style="padding: 0px">
                        <div class="ui left aligned segment remove-border">
                            <div class="ui container grid paddingL0">
                                <div class="three column row">
                                    <div class="twelve wide mobile  twelve wide tablet twelve wide computer column paddingL0">
                                        <?php if(isset($design->imgs->toList()[0]->img )){ ?>
                                            <img src="<?php echo $TailorBaseURL . "/". $design->imgs->toList()[0]->img ?>" id="main-img" style="width: 100%;" class="ui left floated image" />
                                            
                                        <?php } else { ?>
                                            <?= $this->Html->image('dark-gradient.png',array('class' => 'ui left floated image', 'style' => 'width: 100%;', "id" => "main-img"));?>
                                        <?php } ?>
                                    </div>
                                    <div class="two wide mobile  two wide tablet four wide computer column paddingL0 slider-img-container" style="padding-right: 0;">
                                        <?php 
                                            $ind = 1; foreach($design->imgs as $img) { ?>
                                            <img src="<?php echo $TailorBaseURL . "/". $img->img ?>" class="ui tiny left floated image" data-imgindex="<?php echo $ind ?>" />
                                            
                                        <?php $ind++; } ?>
                                                
                                    </div>
                                </div>
                                
                            </div>
                            <h2 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($design->designName) ?></h2>
                            <h3 class="ui header main-text-color" style="display: inline-block;font-weight: normal;margin-top: 0px;margin-left: 20px;">AED <?= $this->Number->format($design->price) ?></h3>
                            <!--<div class="ui large star rating" style="margin-left: 20px;"></div>--!>
                            <h3 class="likeBtn" style="margin-top: 8px;display:inline;float:right;">Like <i class="thumbs outline up icon" style="margin-left: 5px;"></i></h3>
                            <p><?= h($design->description) ?></p>
                            
                        </div>
                        <div class="ui container grid left aligned segment remove-border">
                            <div class="three column row">
                                <div class="column">
                                    <i class="icon large user" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;">
                                        <?php foreach($design->user as $s) { //print_r($s);  ?>
                                        <?= $this->Html->link(__($s->fName ." ". $s->lName), ['controller' => 'profile', 'action' => 'view', $design->profile->id]) ?> 
                                        <?php } ?>
                                    </h3>
                                </div>
                                <div class="column">
                                    <i class="icon large bookmark" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?php echo $design->designtype->name?> Design</h3>
                                </div>
                                <div class="column">
                                    
                                    <i class="icon large cut" aria-hidden="true" style="margin-top: -5px;"></i>
                                    <h3 class="ui header" style="display: inline-block;font-weight: normal;margin-top: 0px;"><?= h($design->fabricName) ?></h3>
                                </div>
                            </div>
                            
                                <div class="three column row">
                                    <?php //print_r($cUser["id"])?>
                                    <div class="column">
                                        <?php if(!isset($cUser) || $cUser["userType"] == 2 || $cUser["userType"] == 3) { ?>
                                        <div class="ui tag labels rigth-arrow remove-circle ">
                                            <a class="ui label product-detail-label label-blue-blackBG-color color-white">
                                                Order Now
                                            </a>
                                            <?= $this->Html->link(__('Order Now'), ['action' => 'process', $design->id], ["class" => "ui label product-detail-label label-blue-blackBG-color color-white"]) ?> 
                                        </div>
                                        <?php } else if(isset($cUser) && $cUser["userType"] == 1 && $cUser["id"] == $design->user_id){ ?>
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
                        <div id="map"></div>
                    </div>
                </div>
                <?php echo $this->element('sidebar-bottom'); ?>
        <script type="text/javascript">
                
                $(function(){
                    s();
                    
                    var user_id = "<?php echo $design->user_id?>";
                    var design_id = "<?php echo $design->id?>";
                    $(".likeBtn").on("click", function(){
                        $(this).toggleClass("liked");//css("cssText", "color: #f46522 !important;");
                        
                    });
                    
                    $('.rating')
                        .rating({
                            initialRating: "<?php echo $design->avrRating ?>",
                            maxRating: 5
                        }).rating(
                            'setting', 
                            'onRate', 
                            function(value) {
                                $.ajax({
                                    method: "POST",
                                    url: "<?php echo $this->Url->build(["controller" => "design","action" => "rated"]);?>",
                                    data: { userID: user_id , designID: design_id , rating: value }
                                })
                                .done(function( msg ) {
                                      //alert( "Data Saved: " + msg );
                                });
                            }
                        );
                    
                });
                function s(){
                    var addressM = $.get("https://maps.googleapis.com/maps/api/geocode/json?address=<?php echo $design->profile->city  ?>+<?php echo $design->profile->country  ?>" ,
                        function(){
                            console.log(addressM["responseJSON"]["results"][0]["geometry"]["location"]);
                            gLat = addressM["responseJSON"]["results"][0]["geometry"]["location"]["lat"];
                            gLong = addressM["responseJSON"]["results"][0]["geometry"]["location"]["lng"];
                            
                            initMaps();
                        }
                    );
                    
                    
                }
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