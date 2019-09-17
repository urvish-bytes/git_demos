<!DOCTYPE html>
<html>
<head>
	<title>Users Account</title>
</head>
<body>
	<?php foreach ($users as $user): ?>
	<table>
		<tr>
			<td> <?= $user['firstname'] ?> </td>
			<td> <?= $user['lastname'] ?> </td>
		</tr>
	</table>
	<?php endforeach; ?>
</body>
</html>