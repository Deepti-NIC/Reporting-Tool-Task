<?php ob_start(); ?>

<?php
 session_start(); 
 
 include("connection.php");	
 
if (isset($_SESSION['userSession'])!="") {
    header("Location: home.php");
   exit;
}

if(isset($_POST['submit']))
{
extract($_POST) ;   
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$sql = mysqli_query($conn,"SELECT * FROM user_details where username='$username' and password='$password' ");
$row  = mysqli_fetch_array($sql);
if(is_array($row))
    {
        $_SESSION["userSession"] = $row['username'];
//        $_SESSION["password"]=$row['password'];
         header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}

?>