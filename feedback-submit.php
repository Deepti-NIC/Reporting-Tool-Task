<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
                <?php
            include("connection.php");	
                    // Taking all values from the form data(input)
                $subject = $_REQUEST['subject'];
                $emailid = $_REQUEST['emailid'];
                $description = $_REQUEST['comment'];
                $visitor_ip = $_SERVER['REMOTE_ADDR'] ; 
//                $studionames = implode(', ', $_POST['studios']);


                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO feedback ( subject,emailid,description,Edited_By,Edited_On,visitor_ip) VALUES ('$subject','$emailid','$description','$emailid',now(),'$visitor_ip')";

                if(mysqli_query($conn, $sql)){
                    echo "<h2>Thank you for submitting your feedback.</h2>";   
                } else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                ?>
        </body>

</html>



