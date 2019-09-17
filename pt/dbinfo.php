<?php
switch ($_SERVER['SERVER_NAME']){
    case 'dev.solvable.com':
        $servername = "localhost";
        $dbDatabase = 'price_tool';
        $dbUsername = 'root';
        $dbPassword = '';
        break;
    default:
        $servername = "localhost";
        $dbDatabase = 'flm_tax_relief';
        $dbUsername = 'leapadmin';
        $dbPassword = 'S08C3!21E90';
    break;
}

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword,$dbDatabase);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>