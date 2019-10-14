<?php  
	$output = '';  
	$connect = mysqli_connect("localhost", "root", "", "crud_storeprocedure");  

	if(isset($_POST["action"]))  
	{  
		$procedure = "  
			CREATE PROCEDURE selectUser()
			BEGIN
			SELECT * FROM users ORDER BY id DESC;
			END;
		";

		if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS selectUser"))  
		{
			if(mysqli_query($connect, $procedure)) {  
				$query = "CALL selectUser()";
				$result = mysqli_query($connect, $query);
				$output .= '  
					<table class="table table-bordered">
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Action</th>
						</tr>
				';

				if(mysqli_num_rows($result) > 0) { 
					while($row = mysqli_fetch_array($result)) {  
						$output .= '
							<tr>
								<td>'.$row["first_name"].'</td>
								<td>'.$row["last_name"].'</td>
								<td>
									<button type="button" name="update" id="'.$row["id"].'" class="update btn btn-primary btn-xs">Edit</button>
									<button type="button" name="delete" id="'.$row["id"].'" class="delete btn btn-danger btn-xs">Delete</button>
								</td>
							</tr>
						';
					}
				} else {  
					$output .= '  
						<tr>
							<td colspan="4">Data not Found</td>
						</tr>
					';
				}
				$output .= '</table>';  
				echo $output;  
			}  
		}  
	}  
?>  