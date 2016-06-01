<!--Top-->
        <div class="ui center aligned segment margin-header OTParallex " style="margin-bottom: 0px;" >
            <div class="ui container grid segment remove-border">
                <div class="sixteen wide column left aligned margined ui segment grid">
                    <div class="ui padded segment remove-border translatebg sixteen wide column" style="padding-top: 0px;padding-right: 0px;">
                        <div class="container " style="">
                            <div class="ui padded segment remove-border translatebg" >
                                <h2 class="ui header ">Login or create new account<span class="hidden-sm"></span></h2>
                                <?= $this->Flash->render('auth') ?>
                                
                            </div>
                            
                            
                                <div class="ui grid">
                                    <div class="sixteen wide mobile six wide computer column ">
                                        <?= $this->Form->create($user ,array("class" => "ui form")) ?>
                                        <h2 class="ui header " style="padding-left: 1em;margin-top: 0px;">Login now<span class="hidden-sm"></span></h2>
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('username', array( 'label' => false, "class" => "remove-border-radius", "placeholder" => "Email" ));?>
                                            
                                        </div>
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('password', array( 'label' => false, "class" => "remove-border-radius", "placeholder" => "Password" ));?>
                                            
                                        </div>
                                        <div class="ui padded segment remove-border paddingT0 translatebg" style="">
                                            <button class="ui grey button remove-border-radius">Login <span class="visible-lg-inline-block"></span></button>
                                        </div>
                                        <?= $this->Form->end() ?>
                                    </div>
                            
                                    <div class="sixteen wide mobile ten wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <h2 class="ui header ">New Customer<span class="hidden-sm"></span></h2>
                                                <p class="" style="font-size: 24">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span class="hidden-sm">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                                                </p>
                                                <div class="" style="">
                                                    <a href="<?php echo $this->Url->build([
                                                            "controller" => "users",
                                                            "action" => "signup"
                                                        ]);
                                                        ?>" >
                                                        <button class='ui grey button remove-border-radius'>Sign Up <span class='visible-lg-inline-block'>Now</span></button>
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
        