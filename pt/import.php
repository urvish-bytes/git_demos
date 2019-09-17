<?php
require('dbinfo.php');
if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        $row=1;
        $debValue=[];
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            if($row==1){
                $debValue=$column;
            }else{
                    
                $val="";
                    for ($i=0; $i < count($column) ; $i++) { 
                        
                        if($i!=0)
                        {

                        $int = (int) filter_var($column[$i], FILTER_SANITIZE_NUMBER_INT);
                        $val.="('$column[0]','$debValue[$i]',$int),";
                            //$sql="INSERT INTO csv_data (state,debt_val,price) values ('$column[0]','$debValue[$i]',$int)";     
                            //mysqli_query($conn, $sql);
                        }
                               
                    }
                    $val=rtrim($val,',');
                    $sql="INSERT INTO `price_compare_csv_data` (state,debt_val,price) values $val";
                    $result=  mysqli_query($conn, $sql);
                 }
            $row++;     
            
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Import</title>
</head>
<body>
    <form class="form-horizontal" action="" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV File</label> <input
        type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import"
        class="btn-submit">Import</button>
        <br />

    </div>
    <div id="labelError"></div>
</form>

</body>
</html>