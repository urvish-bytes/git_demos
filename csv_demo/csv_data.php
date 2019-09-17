<?php
require_once 'db_config.php';

if(isset($_POST["submit"]))
{
	$filename=$_FILES["file"]["name"];
	if($_FILES["file"]["size"]>0)
	{	
		$file = fopen($filename, "r");

		while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
		{
			$sql = "INSERT into price_tool (id,state,debt_amt,price) values ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."')";
			$result = mysqli_query($con, $sql);
		}

		if($result)
		{
			echo "CSV File has been imported successfully.";
			// header("Location: index.php");
		} else {
			echo "Failed to upload file.";
		}
		fclose($file);
	}
	else {
		echo "Error: Please Upload only CSV File";
	}
}
?>