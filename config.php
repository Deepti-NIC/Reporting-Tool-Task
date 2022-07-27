<?php  
  
$mysqli = mysqli_connect('localhost', 'root', 'mysql123','server');
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
//$sql = "SELECT * FROM vc_details";
//$result = $mysqli->query($sql);
//$sortvalue = "VC_Date";
?>
