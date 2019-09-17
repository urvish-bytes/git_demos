<?php 
require('dbinfo.php');

$sql = "SELECT * FROM `price_compare_csv_data` WHERE `state` LIKE '".$_POST["state"]."' AND `debt_val` 
LIKE '".$_POST["debt"]."'";
$result=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_assoc($result));
exit();
?>