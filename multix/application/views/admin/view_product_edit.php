<?php
	if(!$this->session->userdata('id')) {
		redirect(base_url().'admin');
	}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Product</h1>
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

			<?php echo form_open(base_url().'admin/product/edit/'.$product['product_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Name <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="product_name" value="<?php echo $product['product_name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Description <span>*</span></label>
							<div class="col-sm-9">
								<!-- Value get but validation not working -->
									<!-- <textarea class="form-control editor" name="product_desc"><?php echo $product['product_desc']; ?></textarea> -->
								<!-- Validation working but value is not get in edit -->
									<!-- <textarea class="form-control editor" name="product_desc"><?php echo set_value('product_desc'); ?></textarea>  -->

								<?= form_textarea(array('class'=>'form-control editor', 'name'=>'product_desc'), set_value('product_desc',$product['product_desc'])); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Price <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="product_price" value="<?php echo $product['product_price']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="edit">Update</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</section>