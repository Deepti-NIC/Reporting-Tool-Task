<?php  
  
  include("connection.php");	  
// SQL query to select data from database
$sql = "SELECT * FROM vc_details";
$result = $conn->query($sql);
//$sortvalue = "VC_Date";

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);
?>