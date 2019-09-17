<?php include_once('admin_header.php'); ?>

<div class="container">
	<?php echo form_open_multipart('admin/store_article', ['class'=>'form-horizontal']) ?>
	<?php echo form_hidden('user_id', $this->session->userdata('user_id')); ?>
	<?php echo form_hidden('created_at', date('d-M-Y H:i:s')); ?>

  	<fieldset>
  		<div class="row">
			<legend>Add Article</legend>
  		</div>
		<div class="row">
		    <div class="form-group col-lg-6">
		    	<label for="exampleInputEmail1">Article Title</label>
		      	<?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title')]); ?>
		    	<?php echo form_error('title'); ?>
		    </div>
		</div>
  	
  		<div class="row">
		    <div class="form-group col-lg-6">
			    	<label for="exampleInputPassword1">Article Body</label>
		      	<?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body'),'rows'=>'3','cols'=>'10']) ?>
		      	<?php echo form_error('body'); ?>
		    </div>
	    </div>

	    <div class="row">
		    <div class="form-group col-lg-6">
		    	<label for="exampleInputEmail1">Select Image</label>
		      	<?php echo form_upload(['name'=>'image','class'=>'form-control']); ?>
		    	<?php if(isset($upload_error)) echo $upload_error; ?>
		    </div>
		</div>

		<div class="row">
		    <div class="form-group col-lg-6">
			    <?php echo form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary']), 
			    			form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default', 'onclick'=>"window.history.go(-1); return false;"])
			   	?>
			</div>
		</div>
	</fieldset>
	<?php form_close(); ?>
</div>

<?php include_once('admin_footer.php'); ?>