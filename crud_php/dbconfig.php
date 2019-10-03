<?php
	global $con;
	$con = mysqli_connect('localhost','root','','crud_php');
	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}