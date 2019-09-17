<html>
<head>
	<title>Mandrill API Demo</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
</head>
<body>
<?php

	// include Mandrill library file
	include ("lib/Mandrill.php");

	// Passing Mandrill API key in the library
	$mandrill = new Mandrill('PM5crQ3ItDpJ4h7L-CyY1Q');
	$sen_name = "";
	$sen_email = "";
	$rec_name = "";
	$rec_email = "";
	$email_type = "";
	$email_sub = "";
	$msg_type = "";
	$box_msg = "";
	$message = array();
	$to = array();
	if (isset($_POST['sen_name'])) {
		$sen_name = $_POST['sen_name'];
	}
	if (isset($_POST['sen_email'])) {
		$sen_email = $_POST['sen_email'];
	}
	if (isset($_POST['rec_name'])) {
		$rec_name = $_POST['rec_name'];
	}
	if (isset($_POST['rec_email'])) {
		$rec_email = $_POST['rec_email'];
	}
	if (isset($_POST['email_type'])) {
		$email_type = $_POST['email_type'];
	}
	if (isset($_POST['email_sub'])) {
		$email_sub = $_POST['email_sub'];
	}
	if (isset($_POST['msg_type'])) {
		$msg_type = $_POST['msg_type'];
	}
	if (isset($_POST['box_msg'])) {
		$box_msg = $_POST['box_msg'];
	}
	$to[] = array(
		'email' => $rec_email,
		'name' => $rec_name,
		'type' => $email_type
	);
	$message['subject'] = $email_sub;
	$message[$msg_type] = $box_msg;
	$message['from_email'] = $sen_email;
	$message['from_name'] = $sen_name;
	$message['to'] = $to;
	if(isset($to[0]['email']) && $to[0]['email'] !== ""){
		$result = $mandrill->messages->send($message);
		$status = $result[0]['status'];
	}
	?>

	<div id="main">
		<div id="login">
			<hr>
			<form action="" method="POST">
				<h3>From : </h3>
				<label>Sender's Name (Optional) : </label> <input type="text" name="" class="" placeholder="Enter Sender's Name"/> <br>
				<label>Sender's Email Address : </label> <input type="email" name="sen_email" class="sen_email" placeholder="Enter Sender's Email Address"/>
				<h3>To : </h3><br>
				<label>Receiver's Name (Optional) : </label> <input type="text" name="rec_name" class="" placeholder="Enter Receiver's Name"/><br>
				<label>Receiver's Email Address : </label> <input type="email" name="rec_email" class="rec_email" placeholder="Enter Reciever's Email Address"/><br>
				<label>Email Type : </label>
				<input type="radio" name="email_type" value="to" checked="checked" /><label> Default </label>
				<input type="radio" name="email_type" value="cc"/><label> cc </label>
				<input type="radio" name="email_type" value="bcc"/><label> bcc </label> <br>
				<label>Subject : </label>
				<input type="text" name="email_sub" class="" placeholder="Subject"/> <br>
				<label>Message : </label>
				<input type="radio" name="msg_type" value="text" checked="checked"/><label>text</label>
				<input type="radio" name="msg_type" value="html"/><label>html</label>
				<textarea name="box_msg" rows="5" cols="30">Write your message here...</textarea> <br> <br>
				<input type="submit" value="Check" id="submit"/>
			</form>
		</div>

		<div id="note">
			<?php
			if (isset($status)){
				if($status == "sent") {
					echo "<script>alert('Congratulations!!! Your Email has been sent successfully!!!')</script>";
				} elseif($status == "rejected") {
					echo "<script>alert('Sorry!!! Some error occurs, Please try again.')</script>";
				}
			}
			?>
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {
			jQuery("#submit").click(function() {
				var sen_email = jQuery('.sen_email').val();
				var rec_email = jQuery('.rec_email').val();
				if (sen_email == "") {
					alert("Sender's Email Address cannot be empty.");
				}
				if (rec_email == "") {
					alert("Receiver's Email Address cannot be empty.");
				}
			});
		});
	</script>
</body>
</html>