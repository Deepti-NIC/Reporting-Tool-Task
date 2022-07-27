<?php
// database connection code


include("connection.php");	
 
$sql = "SELECT * FROM vc_details";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
//    echo "The total number of rows are: ".$rowcount; 
}

?>