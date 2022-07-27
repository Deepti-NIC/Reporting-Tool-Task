<!DOCTYPE html>
<html>

<head>
	<title>Update page</title>
</head>

<body>
                <?php

include("connection.php");	
// Taking all values from the form data(input)
                $VC_Mode = $_REQUEST['mode'];

                if (!empty($_REQUEST['vcid'])) {
                    $VC_Id = $_REQUEST['vcid'];
                } else {
                    $VC_Id = "NULL";
                }
                $ID = $_REQUEST['ID'];
                $VC_Date = $_REQUEST['vcdate'];
                $VC_STime = $_REQUEST['starttime'];
                $VC_ETime = $_REQUEST['endtime'];
                $Email_Sent = $_REQUEST['mailsent'];
                $Description = $_REQUEST['comment'];
                $CName = $_REQUEST['cname'];
                $CDept = $_REQUEST['cdept'];
                $CDesig = $_REQUEST['cdesig'];
                $CNumber= $_REQUEST['phone'];
                $CEmail = $_REQUEST['cemail'];
                $CEmailDated = $_REQUEST['cdated'];
                $CRemarks = $_REQUEST['cremarks'];
            
                // Performing insert query execution
                // here our table name is college
                $sql = "update vc_details SET VC_Mode ='$VC_Mode' , VC_Id ='$VC_Id' ,VC_Date ='$VC_Date' ,VC_STime ='$VC_STime',VC_ETime ='$VC_ETime' , Email_Sent='$Email_Sent' ,Description ='$Description' , CName = '$CName' ,CDept = '$CDept', CDesig = '$CDesig' ,CNumber = '$CNumber', CEmail = '$CEmail' ,CEmailDated = '$CEmailDated',CRemarks = '$CRemarks',Edited_By = 'Admin' ,Edited_On = now() where ID=$ID;";
   
                if(mysqli_query($conn, $sql)){
                    echo "<h3>data updated in a database successfully."
                        . " "
                        . " to view the updated data</h3>";

                } else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                ?>
                <h2><a href="show_vc_details.php">Click here</a></h2>
        </body>

</html>



