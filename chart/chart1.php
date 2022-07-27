<?php

  $mysqli = mysqli_connect('localhost', 'root', 'mysql123','server');
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$myquery = "select VC_Mode, COUNT(VC_Mode) from vc_details GROUP BY VC_Mode";
$query = $mysqli->query($myquery);  //in place of $result
  
  if ( ! $query ) {
    echo mysql_error();
    die;
  }
 
  //initialize the array to store the processed data
  $jsonArray = array();
  //check if there is any data returned by the SQL Query
    while($row = $query->fetch_assoc()) {
      $jsonArrayItem = array();
      $jsonArrayItem['label'] = $row['VC_Mode'];
      $jsonArrayItem['value'] = $row['COUNT(VC_Mode)'];
      //append the above created object into the main array.
      array_push($jsonArray, $jsonArrayItem);
    }
  
    header('Content-type: application/json');
  echo json_encode($jsonArray);   
  
?>

