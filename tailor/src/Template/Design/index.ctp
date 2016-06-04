<div class="design index large-9 medium-8 columns content" style="display:none;">
    <h3><?= __('Design') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', '<i class="plus icon"></i>', array('escape' => false)) ?></th>
                <th><?= $this->Paginator->sort('tailorID') ?></th>
                <th><?= $this->Paginator->sort('designName') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('fabricName') ?></th>
                <th><?= $this->Paginator->sort('designTypeID') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($designs as $design): ?>
            <tr>
                <td><?= $this->Number->format($design->id) ?></td>
                <td><?= $this->Number->format($design->tailorID) ?></td>
                <td><?= h($design->designName) ?></td>
                <td><?= h($design->description) ?></td>
                <td><?= h($design->fabricName) ?></td>
                <td><?= $this->Number->format($design->designTypeID) ?></td>
                <td><?= $this->Number->format($design->status) ?></td>
                <td><?= $this->Number->format($design->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $design->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $design->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $design->id], ['confirm' => __('Are you sure you want to delete # {0}?', $design->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
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
                                                <a class="remove-circle ui label floatR color-white" style="background-color: #4d4d4d;font-size: 14px;">
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
                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em paddingL0 paddingR0 paddingT0" style="">
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;">Tailor Name</h1>
                        <?php if( isset($cUser) && $cUser['userType'] == 1) { ?>
                        <?= $this->Html->link(__('Add Design'), ['action' => 'add'], [ "style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]) ?>
                        <?php } ?>
                    </div>
                    <?php foreach ($designs as $design): ?>
                    <div class="ui left aligned segment remove-border-radius" style="">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="image">
                                    <img src="img/tailor.png">
                                </div>
                                <div class="content">
                                    <?= $this->Html->link( h($design->designName), ['action' => 'view', $design->id],[ "class"=> "header"]) ?>
                                    <div class="description">
                                        <p><?= h($design->description) ?></p>
                                    </div>
                                    <div class="extra">
                                        <div class="ui compact menu remove-border-radius remove-box-shedow remove-border">
                                            <a class="item label-orange-blackBG-color color-white">
                                                AED <?= $this->Number->format($design->price) ?>
                                            </a>
                                            <a class="item label-blackBG-color color-white">
                                                <div class="ui large star rating"></div>
                                            </a>
                                            <div class="ui tag labels rigth-arrow remove-circle ">
                                                <?= $this->Html->link( __('View Detail'), ['action' => 'view', $design->id],[ "class"=> "ui label product-detail-label label-blue-blackBG-color color-white"]) ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
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