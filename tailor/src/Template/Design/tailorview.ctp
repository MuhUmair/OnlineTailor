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
<?php echo $this->element('sidebar-top'); ?>                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em paddingL0 paddingR0 paddingT0" style="">
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;">Designs</h1>
                        <?php if( isset($cUser) && $cUser['userType'] == 1) { ?>
                        <?= $this->Html->link(__('Add Design'), ['action' => 'add'], [ "style" => "float:right;", "class" => "ui primary button label-blue-blackBG-color color-white"]) ?>
                        <?php } ?>
                    </div>
                    <?php  
                        if($designs->count() == 0){
                            echo "<p>No result found</p>";
                        }
                        foreach ($designs as $design): 
                    ?>
                    <div class="ui left aligned segment remove-border-radius" style="">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="image">
                                    <?php if(isset($design->designimage->img)) {?>
                                        <img src="<?php echo $TailorBaseURL."/".$design->designimage->img ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo $TailorBaseURL."/" ?>/img/tailor.png">
                                    <?php }  ?>
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
                                                <div class="ui large star rating" data-rating="<?php echo $design->avrRating?>" data-max-rating="5" data-did="<?php echo $design->id ?>"></div>
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
                                var design_id = $(this).data("did");
                                //alert( design_id );
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
        
            </script>