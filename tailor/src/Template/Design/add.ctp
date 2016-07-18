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
    <?php echo $this->element('sidebar-top'); ?>
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="text-align: left;">
                    
                    <div class="design form large-9 medium-8 columns content">
                        <?= $this->Form->create($design, ["class" => "ui form","type" => "file"]) ?>
                        <fieldset style="border:none;">
                            <?php
                                echo $this->Form->hidden('tailorID',["value" => $cUser['id']]);
                                echo "<label>Design Name</label>";
                                echo $this->Form->input('designTypeID',['label' => false, "class" => "dType",
                                    'options' => [  '1' => 'Mokawar', 
                                                    '2' => 'Printed', 
                                                    '3' => 'Model', 
                                                    '4' => 'Jalabeya',
                                                    '5' => 'Moroccan Dresses',
                                                    '6' => 'Dresses',
                                                    '7' => 'Dantail',
                                                    '8' => 'Abaya',
                                                 ]
                                ]);
                                echo $this->Form->input('designName', ["type" => "hidden", "class" => "dName"]);
                                echo "<br />";
                                echo $this->Form->input('description');
                                echo "<br />";
                                echo $this->Form->input('fabricName');
                                echo "<br />";
                                echo "<br />";
                                echo $this->Form->input('status');
                                echo "<br />";
                                echo $this->Form->input('price');
                                echo "<div id='imgCon' ><br />";
                                echo $this->Form->input('imgs', [ "type" => "file", "label" => false, "name" => "imgs[]"]);
                                echo "</div>";
                                
                            ?>
                            <div class="ui label addImg" style="margin-top:10px;cursor: pointer;">
                                <i class="plus icon" ></i>Add more
                            </div>
                        </fieldset>
                        <div class="ui tag labels rigth-arrow remove-circle " style="display:inline-block;">
                        <?= $this->Form->button(__('Submit'), ["class" => "ui label product-detail-label label-blue-blackBG-color color-white"]) ?>
                        </div>
                        
                        <?= $this->Form->end() ?>
                        
                    </div>

                </div>
           <?php echo $this->element('sidebar-bottom'); ?> 
        <script>
            $(function(){
                $(".addImg").on("click", function(){
                    $("#imgCon").append('<br /><div class="input file"><input type="file" name="imgs[]" id="imgs"></div>');
                });
                $(".dName").val($(".dType option:selected").text());
                $(".dType").on("change", function(){
                    $(".dName").val($(".dType option:selected").text());
                    
                });
            });
        </script>