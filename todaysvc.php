<?php
// database connection code


include("connection.php");	
 
$sql = " select * from vc_details where VC_Date=CURDATE();";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
//    echo "The total number of rows are: ".$rowcount; 
}
?>