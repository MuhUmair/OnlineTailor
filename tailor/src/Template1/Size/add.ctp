<?php echo $this->element('sidebar-top'); ?>                
                <div class="sixteen wide mobile  eleven wide tablet eleven wide computer column padding-xs-2em padding0" style="">
                    <div class="ui segment remove-border remove-border-radius paddingL0" style="margin-top: 1em; text-align: left;">
                        <i class="sidebar big icon OTSide-Menu visible-xs-inline-block" style='margin-top: -12px;color: black;'></i>
                        <h1 class="ui left aligned header main-text-color" style="font-weight: normal;display: inline-block;margin-top: 0px;">Size Chart</h1>
                        
                    </div>
                    <div class="ui container grid">
                        <div class="ui segment fifteen wide mobile  fifteen wide tablet fifteen wide computer column remove-border-radius remove-border marginL0-lg " style="padding: 0px;margin: 1em;">
                            <div class="ui left aligned segment remove-border paddingL0">
                                <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                                
                            </div>
                            <div class="ui container grid left aligned segment remove-border">
                                <form class="ui form sixteen wide mobile  sixteen wide tablet sixteen wide computer column paddingL0" method="post" action="<?php echo $this->Url->build(["controller" => "size","action" => "add"]);?>">
                                <div class="one column row">
                                    
                                        <div class="field">
                                            <div class="two fields">
                                                <div class="field">
                                                    <?php echo $this->Form->input('shouderLength',["placeholder" => "Shoulder length", "label" => false]);?>
                                                </div>
                                                <div class="field">
                                                    <?php echo $this->Form->input('waist',["placeholder" => "Waist cuantum", "label" => false]);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="two fields">
                                                <div class="field">
                                                    <?php echo $this->Form->input('sleeveLength',["placeholder" => "Sleeve length", "label" => false]);?>
                                                </div>
                                                <div class="field">
                                                    
                                                    <?php echo $this->Form->input('bottomWidth',["placeholder" => "Bottom width", "label" => false]); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="two fields">
                                                <div class="field">
                                                    <?php echo $this->Form->input('sleeveWidth',["placeholder" => "Sleeve width", "label" => false]); ?>
                                                </div>
                                                <div class="field">
                                                    <?php echo $this->Form->input('totalLength' ,["placeholder" => "Total length", "label" => false]);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="two fields">
                                                <div class="field">
                                                    <?php echo $this->Form->input('chest',["placeholder" => "Chest", "label" => false]);?>
                                                </div>
                                                <div class="field">
                                                    <?php echo $this->Form->input('total',["placeholder" => "Total length", "label" => false]); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="two fields">
                                                <div class="field">
                                                    <?php echo $this->Form->input('designID', [
                                                        'options' => [
                                                                      '0' => 'All',
                                                                      '1' => 'Mokawar',
                                                                      '2' => 'Printed',
                                                                      '3' => 'Model',
                                                                      '4' => 'Jalabeya',
                                                                      '5' => 'Moroccan',
                                                                      '6' => 'Dresses',
                                                                      '7' => 'Dantail',
                                                                      '8' => 'Other'
                                                                    ],'label' => false 
                                                    ]);?>
                                                    <input name="userID" type="hidden"  value="<?php echo $cUser["id"]; ?>"
                                                </div>
                                                
                                            </div>
                                        </div>
                                                
                                    
                                </div>
                                <div class="one column row" style="margin-top: 20px;">
                                    <div class="column paddingL0">
                                        <div class="ui compact menu remove-border-radius remove-box-shedow remove-border ">
                                            <div class="ui tag labels rigth-arrow remove-circle ">
                                                <button class="ui label product-detail-label label-blue-blackBG-color color-white">
                                                    Save and Next
                                                </button>
                                            </div>
                                        </div> 
                                    </div>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
               <?php echo $this->element('sidebar-bottom'); ?>