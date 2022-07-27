<?php
                    include("connection.php");	
  
// SQL query to select data from database
//$myquery = "select VC_Mode from vc_details where VC_Date=CURDATE();";
//$myquery = "SELECT (select count(*) from vc_details where CRemarks LIKE '%Minister%') as Count_Minister_VC, (select count(*) from vc_details where CRemarks LIKE '%MOS%') as Count_MOS_VC";
$myquery = "select count(*) as Count_VC, 'Minister' from vc_details where CRemarks LIKE '%Minister%' UNION select count(*) as Count_MOS_VC, 'MOS' from vc_details where CRemarks LIKE '%MOS%'";
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
      $jsonArrayItem['label'] = $row['Minister'];
      $jsonArrayItem['value'] = $row['Count_VC'];
      //append the above created object into the main array.
      array_push($jsonArray, $jsonArrayItem);
    }
    header('Content-type: application/json');
  echo json_encode($jsonArray);   
  
?>

