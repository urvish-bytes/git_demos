<?php
	if(!$this->session->userdata('id')) {
		redirect(base_url().'admin');
	}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Products</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/product/add" class="btn btn-primary btn-md">Add New</a>
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

			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Product Name</th>
								<th>Product Description</th>
								<th>Product Price</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=0;
								foreach ($product as $row) {
									$i++;
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td>
											<!-- <?php echo $row['product_name']; ?> -->

											<!-- <?= anchor( base_url(). "admin/product/{$row->product_id}",$row->product_name,['class'=>'btn-link disabled','onclick'=>'alert("<?php echo $row["product_name"] . ', ' . product not found" ?>")']) ?> -->
											
											<!-- return confirm or alert a dialog box -->
											<a href="<?php echo base_url(); ?>admin/product/show/<?php echo $row['product_id']; ?>" class="btn btn-link" target="_blank" onclick="return confirm('<?php echo $row['product_name'] . ' ' . "product not found" ?>')"><?php echo $row['product_name']; ?></a>
										
										</td>
										<td><?php echo $row['product_desc']; ?></td>
										<td><?php echo $row['product_price']; ?></td>
										<td>
											<a href="<?php echo base_url(); ?>admin/product/edit/<?php echo $row['product_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
											<a href="<?php echo base_url(); ?>admin/product/delete/<?php echo $row['product_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure want to delete this product?');">Delete</a> 
										</td>
									</tr>
								<?php }
							?>
						</tbody>
					</table>
				</div>
			</div>
</section>

<!-- Success msg fadeout -->
<script>
    setTimeout(function() {
        $('.callout').hide('slow');
    }, 2000);
</script>