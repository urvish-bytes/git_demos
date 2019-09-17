<?php include_once('admin_header.php'); ?>

<div class="container">
	<?php echo form_open("admin/update_article/{$article->id}", ['class'=>'form-horizontal']) ?>

  	<fieldset>
  		<div class="row">
			<legend>Edit Article</legend>
		</div>

		<div class="row">
		    <div class="form-group col-lg-6">
		    	<label for="exampleInputEmail1">Article Title</label>
		      	<?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title',$article->title)]) ?>
		    	<?php echo form_error('title'); ?>
		    </div>
	    </div>
		
		<div class="row">
		    <div class="form-group col-lg-6">
			    	<label for="exampleInputPassword1">Article Body</label>
		      	<?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body',$article->body),'rows'=>'5','cols'=>'10']) ?>
		      	<?php echo form_error('body'); ?>
		    </div>
	    </div>

	    <div class="row">
		    <div class="form-group col-lg-6">
			    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']), 
			    			form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default', 'onclick'=>"window.history.go(-1); return false;"])
			   	?>
			</div>
		</div>
	</fieldset>
	</form>
</div>

<?php include_once('admin_footer.php'); ?>