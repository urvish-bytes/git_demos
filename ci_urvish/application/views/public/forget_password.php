<div class="container">
	<div class="row padding-top-btm">
		<div class="col-md-4">
			<div class="new-car-con">
				<form method="post" action="doforget" role="form" >
					<div class="form-group">
						<?php if($this->session->flashdata('message')) {?>
							<label><span style="color: #CC6633"><?php echo $this->session->flashdata('message');?><span></label>
							<?php }?>
						</div>
						<h4>Forget pasword</h4>
						<div class="form-group">
							<label for="txtLoginid">Email Id</label>
							<input name="uname" type="email" size="25" id="uname" placeholder="Enter email" class="form-control" value="<?php echo set_value('uname');?>" />
							<span style="color:red"><?php echo form_error('uname');?></span>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div></div>
			</div>
		</div>