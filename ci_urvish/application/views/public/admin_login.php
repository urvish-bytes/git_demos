<?php include ('public_header.php'); ?>

<div class="container">
	<!-- <form class="form-horizontal" action=""> -->
	<?php echo form_open('login/admin_login', ['class'=>'form-horizontal']) ?>
  	<fieldset>
		<legend>Admin Login</legend>
	    
	    <?php if($error = $this->session->flashdata('login_failed')): ?>
	    <div class="alert alert-dismissible alert-danger form-group col-lg-6">
			<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
			<!-- <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. -->
			<?= $error ?>
		</div>
		<?php endif; ?>

	    <div class="form-group col-lg-6">
	    	<label for="exampleInputEmail1">Username</label>
	      	<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value("username")]); ?>
	    	<?php echo form_error('username'); ?>
	    </div>

		    
	    <div class="form-group col-lg-6">
		    	<label for="exampleInputPassword1">Password</label>
	      	<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']) ?>
	      	<?php echo form_error('password'); ?>
	    </div>

	    <div class="form-group col-lg-6">
		    <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']), 
		    			form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default'])
		   	?>
		</div>

		<?= anchor('forget_password', 'Forget Password?',['class'=>'btn-link disabled']) ?>
	</fieldset>
	</form>
</div>

<?php include ('public_footer.php'); ?>