<?php
require_once 'db_config.php';

if(isset($_POST["submit"]))
{
	$filename=$_FILES["file"]["name"];
	if($_FILES["file"]["size"]>0)
	{	
		$row=1;
		$col=0;

		$file = fopen($filename, "r");
		while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
		{
			if ($row) {
				$col=$data;
			} else {
				$count_value = count($data);
				for ($i=0; $i<$count_value; $i++) {
					// trim
					$trim = trim($count_value);
				}
			}
			
			// for($row=1; $row < $data; $row++) {
			// 	for ($col=0; $col < $data ; $col++) { 
			// 		$count_value = count($data);

			// 		$trim = trim($count_value);
			// 	}
			// }

			$sql = "INSERT into users (userid,username,password,firstname,lastname) values ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
			$result = mysqli_query($con, $sql);
		
		}

		if($result)
		{
			echo "CSV File has been imported successfully.";
			// header("Location: index.php");
		} else {
			echo "Failed to upload file.";
			// header("Location: index.php");
		}
		fclose($file);
	}
	else {
		echo "Error: Please Upload only CSV File";
	}

}
?>