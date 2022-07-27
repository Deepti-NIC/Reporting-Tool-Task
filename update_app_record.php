<!DOCTYPE html>
<html>

<head>
	<title>Update page</title>
</head>

<body>
                <?php

            include("connection.php");	
// Taking all values from the form data(input)
                $Public_IP = $_REQUEST['publicip'];
                $Project_Name = $_REQUEST['projectname'];
                $Website_Name = $_REQUEST['url'];
                $Designed_By  = $_REQUEST['designedby'];
                $Managed_By   = $_REQUEST['managedby'];
                $OS = $_REQUEST['os'];
                $VA= $_REQUEST['va'];
                $Server_Hardening = $_REQUEST['hardening'];
                $Antivirus_Name   = $_REQUEST['avname'];
                $SOC_Entry = $_REQUEST['soc'];
                $Warnings  = $_REQUEST['warining'];
                $SSLEnd_Date      = $_REQUEST['sslenddate'];
                $AuditStart_Date = $_REQUEST['auditstartdate'];
                $AuditEnd_Date    = $_REQUEST['auditenddate'];
                $Backup_Policy   = $_REQUEST['policy'];
                $Bkp_Frequeny     = $_REQUEST['frequency'];
                $Bkp_Retention    = $_REQUEST['retention'];            
                // Performing insert query execution
                // here our table name is college
                $sql = "update server_details SET Public_IP ='$Public_IP' ,Project_Name ='$Project_Name' ,Website_Name ='$Website_Name',
                Designed_By ='$Designed_By' , Managed_By='$Managed_By' , OS='$OS', VA='$VA',Server_Hardening='$Server_Hardening',
                Antivirus_Name='$Antivirus_Name', SOC_Entry ='$SOC_Entry' , Warnings='$Warnings' ,
                SSLEnd_Date ='$SSLEnd_Date', AuditStart_Date='$AuditStart_Date', AuditEnd_Date='$AuditEnd_Date',
                Backup_Policy='$Backup_Policy',Bkp_Frequeny='$Bkp_Frequeny',Bkp_Retention='$Bkp_Retention' where Project_Name LIKE '$Project_Name' ";
                
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
                <h2><a href="app_report.php">Click here</a></h2>
        </body>

</html>



