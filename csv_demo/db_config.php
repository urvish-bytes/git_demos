<?php
	$host="localhost";
	$db_user="root";
	$db_password="";
	$db='csv_demo';

	$con=mysqli_connect($host,$db_user,$db_password,$db);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>