<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
        <?php
                    include("connection.php");	
                // Taking all values from the form data(input)
                $team_member = $_REQUEST['team_member'];
                $task_list = $_REQUEST['task_list'];
                $days = $_REQUEST['days'];
                
            //    $Bkp_Managedby = $_REQUEST['managedby'];
            
                $sql = "INSERT INTO todo (team_member, task_list, days, dated) VALUES
                 ('$team_member','$task_list','$days', now())";
            
            
            
                if(mysqli_query($conn, $sql)){
                 //echo "server details added";
                       header("Location:todo-list.php");
                } else{
                    echo "ERROR: Hush! Sorry. PLease go back and fill in the correct details.$sql "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                ?>
        </body>

</html>



