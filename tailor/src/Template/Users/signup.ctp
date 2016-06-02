<!--Top-->
        <div class="ui center aligned segment margin-header OTParallex" style="margin-bottom: 0px;" >
            <div class="ui container grid segment remove-border">
                <div class="sixteen wide column left aligned margined ui segment grid">
                    <div class="ui padded segment remove-border translatebg thirteen wide column" style="padding-top: 0px;padding-right: 0px;">
                        <div class="container " style="">
                            <div class="ui padded segment remove-border translatebg" >
                                <h1 class="ui header ">Find the perfect professional tailor today <span class="hidden-sm"></span></h1>
                                <p class="" style="font-size: 24">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span class="hidden-sm">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                                </p>
                            </div>
                            <?= $this->Form->create($user, array("class" => "ui form")) ?>
                                <div class="ui grid">
                                    <div class="sixteen wide mobile six wide computer column ">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('fName', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'First Name'));?>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <?php echo $this->Form->input('lName', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Last Name'));?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column ">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('email', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Email'));?>
                                            
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <?php echo $this->Form->input('phone', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Phone'));?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column ">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('password', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Password'));?>
                                            
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <?php echo $this->Form->input('conpassword', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Confirm Password'));?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column ">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <?php echo $this->Form->input('city', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'City'));?>
                                            
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <?php echo $this->Form->input('country', array( 'label' => false , 'class' => 'remove-border-radius', 'placeholder' => 'Country'));?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field">
                                                <?php echo $this->Form->input('userType', [
                                                        'options' => ['1' => 'Tailor', '2' => 'Customer'],'label' => false 
                                                    ]);?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen wide mobile six wide computer column " style="">
                                        <div class="ui padded segment remove-border paddingT0 translatebg">
                                            <div class="field" style="    margin-left: 0px;">
                                                <div class="ui left floated compact segment">
                                                    <div class="ui fitted checkbox">
                                                        <input type="checkbox" name="isNews" >
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <div style="padding-top: 1em;">
                                                    sign up for newsletters
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="six wide column">
                                        <div class="ui padded segment remove-border paddingT0 translatebg" style="">
                                            <button class="ui grey button remove-border-radius">Sign up <span class="visible-lg-inline-block">Now</span></button>
                                        </div>
                                    </div>
                                    
                                </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--/Top-->
        