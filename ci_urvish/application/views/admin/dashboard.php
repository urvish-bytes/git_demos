<?php include ('admin_header.php'); ?>
	
	<!-- Flash message fadein and fadeout -->
  	<script type="text/javascript">
    	setTimeout(function(){
      		$("#successMsg").fadeOut('slow');
       	}, 2000);

  		// $(document).ready(function(){
		//     $("#successMsg").delay(5000).slideUp(300);
		// });
  	</script>

<div class="container">

	<div class="row">
		<div class="col-lg-3 offset-10">
			<?= anchor('admin/store_article','Add article',['class'=>'btn btn-primary my-2']); ?>
		</div>
	

	<div id="successMsg">
		<?php if($feedback = $this->session->flashdata('feedback')):
				$feedback_class = $this->session->flashdata('feedback_class'); ?>
	    		<div class="alert alert-dismissible <?= $feedback_class ?> form-group col-lg-12 offset-10">
					<?= $feedback ?>
				</div>  </br>
		<?php endif; ?>
	</div> 
	</div>	
	<div class="row">
		<table class="table">
			<thead>
				<th>Sr. No</th>
				<th>Title</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php if(count($articles)): 
					$count = $this->uri->segment(3, 0);
					foreach($articles as $article): ?>
						<tr>
							<td><?= ++$count ?></td>
							<td> <?= $article->title ?> </td>
							<td>
								<div class="row">
									<div class="col-lg-2">
										<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
									</div>
									<div class="col-lg-2">
									<?=
										form_open('admin/delete_article'),
										form_hidden('article_id',$article->id),
										form_submit(['value'=>'Delete','class'=>'btn btn-danger','onclick' => "return confirm('Are you sure want delete this Article?')"]),
										form_close();
									?>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan=3>
							No Record Found.
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links() ?>
	</div>
</div>

<?php include ('admin_footer.php'); ?>
