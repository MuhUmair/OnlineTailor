<?php echo $this->element('sidebar-top'); ?>                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="size index large-9 medium-8 columns content">
                        <h3 style="display:inline-block;float:left;"><?= __('Sizes') ?></h3>
                        <?= $this->Html->link(__('New Size'), ['action' => 'add'],["style" => "float:right" ]) ?>
                        <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                            
                        </div>
                        <table class="ui celled table" cellpadding="0" cellspacing="0">
                            <tbody>
                                <?php foreach ($size as $size): ?>
                                <tr>
                                
                                    <td>
                                        <?php if(isset($size->designtype->name) && $size->designtype->name != "") { ?>
                                        <?= h($size->designtype->name) ?>
                                        <?php } else {  echo "All" ; }?>
                                            
                                    </td>
                                    <td class="actions">
                                        <div class="ui breadcrumb">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $size->id]) ?>
                                            <div class="divider"> / </div>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $size->id]) ?>
                                            <div class="divider"> / </div>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?>

                                        </div>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        
                    </div>

                </div>
                <?php echo $this->element('sidebar-bottom'); ?>