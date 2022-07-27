<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
        <?php
                    include("connection.php");	
                // Taking all values from the form data(input)
                $Private_IP = $_REQUEST['privateip'];
                $Public_IP = $_REQUEST['publicip'];
                $Project_Name = $_REQUEST['projectname'];
                $Website_Name = $_REQUEST['url'];
                $Designed_By  = $_REQUEST['designedby'];
                $Managed_By   = $_REQUEST['managedby'];
                $CUC  = $_REQUEST['cuc'];
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
// Newly added columns
          $VM_Type  = $_REQUEST['VM_Type'];
          $Location  = $_REQUEST['Location'];
          $VM_Template  = $_REQUEST['VM_Template'];
          $Webserver  = $_REQUEST['Webserver'];
          $DBase  = $_REQUEST['DBase'];
          $Services  = $_REQUEST['Services'];
          $Ports  = $_REQUEST['Ports'];


            //    $Bkp_Managedby = $_REQUEST['managedby'];
            
                $sql = "INSERT INTO server_details (Private_IP,Public_IP,Project_Name,Website_Name,Designed_By,Managed_By,
                CUC,VM,OS,VA,Server_Hardening,Antivirus_Name,SOC_Entry,Warnings,SSLEnd_Date,
                AuditStart_Date,AuditEnd_Date,Backup_Policy,Bkp_Frequeny,Bkp_Retention,Bkp_Managedby,
                VM_Type,Location,VM_Template, Webserver,DBase, Services, Ports) VALUES
                 ('$Private_IP','$Public_IP','$Project_Name','$Website_Name','$Designed_By','$Managed_By',
                '$CUC','$Private_IP','$OS','$VA','$Server_Hardening','$Antivirus_Name','$SOC_Entry','$Warnings','$SSLEnd_Date',
                '$AuditStart_Date','$AuditEnd_Date','$Backup_Policy','$Bkp_Frequeny','$Bkp_Retention','NIC',
                '$VM_Type', '$Location', '$VM_Template', '$Webserver', '$DBase', '$Services', '$Ports')";
            
            
            
            // $target_dir = "docs/";
            // $target_file = $target_dir . basename($_FILES["auditFile"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // // Check if image file is a actual image or fake image
            // if(isset($_POST["submit"])) {
            //   $check = getimagesize($_FILES["auditFile"]["tmp_name"]);
            //   if($check !== false) {
            //     echo "File is an image - " . $check["mime"] . ".";
            //     $uploadOk = 1;
            //   } else {
            //     echo "File is not an image.";
            //     $uploadOk = 0;
            //   }
            // }
            
            // // Check if file already exists
            // if (file_exists($target_file)) {
            //   echo "Sorry, file already exists.";
            //   $uploadOk = 0;
            // }
            
            // // Check file size
            // if ($_FILES["auditFile"]["size"] > 500000) {
            //   echo "Sorry, your file is too large.";
            //   $uploadOk = 0;
            // }
            
            
            // // Check if $uploadOk is set to 0 by an error
            // if ($uploadOk == 0) {
            //   echo "Sorry, your file was not uploaded.";
            // // if everything is ok, try to upload file
            // } else {
            //   if (move_uploaded_file($_FILES["auditFile"]["tmp_name"], $target_file)) {
            //     echo "The file ". htmlspecialchars( basename( $_FILES["auditFile"]["name"])). " has been uploaded.";
            //   } else {
            //     echo "Sorry, there was an error uploading your file.";
            //   }
            // }
            



                if(mysqli_query($conn, $sql)){
                 //echo "server details added";
                       header("Location:home.php");
                } else{
                    echo "ERROR: Hush! Sorry. PLease go back and fill in the correct details.$sql "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                ?>
        </body>

</html>



