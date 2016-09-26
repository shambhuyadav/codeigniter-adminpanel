
<?php include('header.php'); ?>

   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                        
   
  
                        <!-- <form role="form"> -->
                               <?php if(isset($_SESSION)) {
                                    echo $this->session->flashdata('flash_data');
                                } ?>
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('login'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php $data = array(
                                                        'type'  => 'text',
                                                        'name'  => 'username',
                                                        'id'    => 'username',
                                                        'class' => 'form-control',
                                                        'value' => set_value('username')
                                                );

                                        echo form_input($data); ?>
                                        
                                       

                                </div>
                                <div class="form-group">
                                    <?php $data = array(
                                                       'type' => 'password',
                                                       'name' => 'password',
                                                        'id' => 'password',
                                                        
                                                        'class' => 'form-control'
                                                );

                                        echo form_password($data); ?>

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               
                                 <?php $data = array('type' =>'submit',
                                                        'name'  => 'password',
                                                        'value'    => 'Login',
                                                        'class' => 'btn btn-lg btn-success btn-block'
                                                );
                                 echo form_submit('submit', 'Submit Post!',$data); ?>
                                 <?php echo form_close(); ?>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');?>

