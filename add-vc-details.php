<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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
            
//                $studionames = implode(', ', $_POST['studios']);


                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO vc_details ( VC_Mode,VC_Id,VC_Date,VC_STime,VC_ETime,Email_Sent,Description,CName,CDept,CDesig,CNumber,CEmail,CEmailDated,CRemarks,Edited_By,Edited_On) VALUES ('$VC_Mode','$VC_Id','$VC_Date','$VC_STime','$VC_ETime',
                '$Email_Sent','$Description','$CName','$CDept','$CDesig','$CNumber','$CEmail','$CEmailDated','$CRemarks','Admin',now())";
                
                if(mysqli_query($conn, $sql)){
                    header("Location:show_vc_details.php");
                } else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                ?>
        </body>

</html>



