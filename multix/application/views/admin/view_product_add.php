<?php
	if(!$this->session->userdata('id')) {
		redirect(base_url().'admin');
	}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Product</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/product" class="btn btn-primary btn-md">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php
				if($this->session->flashdata('error')) {
					?>
					<div class="callout callout-danger">
						<p><?php echo $this->session->flashdata('error'); ?></p>
					</div>
					<?php
				}
				if($this->session->flashdata('success')) {
					?>
					<div class="callout callout-success">
						<p><?php echo $this->session->flashdata('success'); ?></p>
					</div>
					<?php
				}
			?>

			<?php echo form_open(base_url().'admin/product/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Name <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="product_name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">product Description <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="product_desc"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Price <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="product_price" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="add">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</section>