<!DOCTYPE HTML>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Ajax Crud</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$("#form").submit(function() {
				$.post('ajaxPost.php', $('#form').serialize(), function() {
					$('#messages').load(location.href);
				});
				return false;
			});

			$('.update').click(function() {
				var item = $(this).parent();
				var id = $(this).attr('rel');
				var name = $('.row' + id + ' .name').val();
				var phone = $('.row' + id + ' .phone').val();
				var address = $('.row' + id + ' .address').val();
				
				$.post('ajaxUpdate.php', {
					'id' : id,
					'name' : name,
					'phone' : phone,
					'address' : address
				});
			});

			$('.delete').click(function() {
				var item = $(this).parent();
				var id = $(this).attr('rel');
				$.post('ajaxDelete.php', {
					'id' : id
				}, function() {
					$(item).hide();
				});
			});
		});
	</script>
</head>
<body>
	<div id="messages">
		<?php 
		include 'config.php';

		$db->query('SELECT * FROM user');

		$data = $db->Get();

		foreach ($data as $key => $value): ?>
		<div class="row<?php echo $value['id']; ?>">
			<input class="name" type="text" value="<?php echo $value['name']; ?>" name="name" />
			<input class="phone" type="text" value="<?php echo $value['phone']; ?>" name="phone" />
			<input class="address" type="text" value="<?php echo $value['address']; ?>" name="address" />
			<a class="update" href="#" rel="<?php echo $value['id']; ?>">Update</a>
			<a class="delete" href="#" rel="<?php echo $value['id']; ?>" onClick="return confirm('Are you sure want to delete.?')">Delete</a>
		</div>
		<?php endforeach; ?>
	</div>
	<br />
	<form id="form" class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-9">
				<label>Name</label>
				<input type="text" class="form-control" name="name" /><br />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9">
				<label>Phone</label>
				<input type="text" class="form-control" name="phone" /><br />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9">
				<label>Address</label>
				<input type="text" class="form-control"	name="address" /><br />
			</div>
		</div>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>
