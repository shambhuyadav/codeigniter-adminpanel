<?php include('header.php'); ?>


	<div class="table-responsive">
		
		<table class="table table-striped table-bordered table-hover">
			 <div class="col-md-4 col-md-offset-4 well">
			 	<br>
			 <legend>New Record</legend>
			 
			
			<?php 

			$attributes = array('class' => 'form-group');
			echo form_open('/insert/insert_record',$attributes);
            
            // echo form_hidden('id',$id); 
			echo form_error('name'); 
			$data=array(
				'class' =>'panel-heading'
			);
			echo form_fieldset('Name ',$data);
			$data = array(
			                    'type'  => 'text',
			                    'name'  => 'name',
			                    'id'    => 'name',
			                    'class' => 'form-control',
			                    'required' => '',
			                    'placeholder' => 'Name'
			                    
			            );

			echo form_input($data); 
			echo form_fieldset_close();
			echo form_error('message'); 
			$data =array(
				'class' =>'panel-heading'
			);
			echo form_fieldset('Message',$data);
			 $data = array(
			                    'type'  => 'text',
			                    'name'  => 'message',
			                    'id'    => 'message',
			                    'class' => 'form-control',
			                    'placeholder' => 'message',
			                    'required' => '',
			                    'value' => set_value('message')
			            );

			echo form_input($data); 
			echo form_fieldset_close();
			echo form_error('phone');
			$data =array(
				'class' =>'panel-heading'
			);
			echo form_fieldset('Phone',$data);
			 $data = array(
			                    'type'  => 'text',
			                    'name'  => 'phone',
			                    'id'    => 'phone',
			                    'class' => 'form-control',
			                    'placeholder' => 'phone',
			                    'required' => '',			                    
			                    'value' => set_value('phone')
			            );

			echo form_input($data); 
			echo form_fieldset_close();
			echo form_error('email');
			$data =array(
				'class' =>'panel-heading'
			);
			echo form_fieldset('Email',$data);
			 $data = array(
			                    'type'  => 'text',
			                    'name'  => 'email',
			                    'id'    => 'email',
			                    'class' => 'form-control',
			                    'placeholder' => 'email',
			                    'required' => '',
			                    'value' => set_value('email')
			            );

			echo form_input($data); 
			echo form_fieldset_close();

			echo '<br>';

			$data = array( 
			 	            'type' =>'submit',
                            'name'  => 'submit',
                            'value'    => 'Login',
                            'required' => '',
                            'class' => 'btn btn-primary btn-lg'
                    );
            echo form_submit('submit', 'Submit Post!',$data); 

			echo form_close(); ?>
			<div>
			
		
			
			</div>
		</table>	
	</div>

<script>
$(document).ready(function() {
$("#btnSave").click(function(e) {
$("#formEdit").submit();
});
});
</script>

<?php include('footer.php');?>