<?php
  
  include("connection.php");	
  
// SQL query to select data from database
$myquery = "select VC_Mode, COUNT(VC_Mode) AS count from vc_details GROUP BY VC_Mode";
$query = $conn->query($myquery);  //in place of $result
  
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
      $jsonArrayItem['value'] = $row['count'];
      //append the above created object into the main array.
      array_push($jsonArray, $jsonArrayItem);
    }
  
    header('Content-type: application/json');
  echo json_encode($jsonArray);   
  
?>

