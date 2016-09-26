<?php include('header.php'); ?>


	<div class="table-responsive">
		
		<table class="table table-striped table-bordered table-hover">
			 <div class="col-md-4 col-md-offset-4 well">
			 	<br>
			 <legend>Update  Details</legend>	
			<?php foreach($result  as $r): ?>
			<?php 
			// $attributes = array('name' => 'formEdit', 'id' => 'formEdit'); 
			// $hidden = array('is_submit' => 1);
			$attributes = array('class' => 'form-group');
			echo form_open('/delete_data/updated',$attributes);
            
            echo form_hidden('id',$id); 

            echo form_error('name'); 
			$data =array(
				'class' =>'panel-heading'
			);
			echo form_fieldset('name ',$data);

			$data = array(
			                    'type'  => 'text',
			                    'name'  => 'name',
			                    'class' => 'form-control',
			                    'placeholder' => $r->name,
			                    'value' => set_value('name'),
			                    'required'=>'required'
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
			                    'class' => 'form-control',
			                    'placeholder' => $r->message,
			                    'value' => set_value('message'),
			                    'required'=>'required'
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
			                    'class' => 'form-control',
			                    'placeholder' => $r->phone,			                    
			                    'value' => set_value('phone'),
			                    'required'=>'required'
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
			                    'class' => 'form-control',
			                    'placeholder' => $r->email,
			                    'value' => set_value('email'),
			                    'required'=>'required'
			            );

			echo form_input($data); 
			echo form_fieldset_close();

			echo '<br>';

			$data = array( 
			 	            'type' =>'submit',
                            'name'  => 'password',
                            'value'    => 'Login',
                            'class' => 'btn btn-primary btn-lg'
                    );
            echo form_submit('submit', 'Submit',$data); 

			echo form_close(); ?>
			<div>
			
		
			
			</div>
		</table>	
	</div>

<?php endforeach; ?>

<script>
$(document).ready(function() {
$("#btnSave").click(function(e) {
$("#formEdit").submit();
});
});
</script>

<?php include('footer.php');?>