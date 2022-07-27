<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'var/www/html/SERVER-VC-details/composer/vendor/autoload.php';

$mysqli = mysqli_connect('10.247.2.107', 'root', 'mysql123','server');
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT Website_Name, VA, SSLEnd_Date, AuditEnd_Date  FROM server_details";
$result = $mysqli->query($sql);
while($rows=$result->fetch_assoc())
{
    $prj=$rows['Website_Name'];        
    $today = date('Y-m-d');
    $Auditdate =  date("Y-m-d", strtotime($rows['AuditEnd_Date']));
    $sub=strtotime($Auditdate)-strtotime($today);
    $diff = round($sub / (60 * 60 * 24));
    echo nl2br("\nToday" .$today ."ssl" .$Auditdate ."diff" .$diff);

    if($diff<=30){
        echo "send mail";
                $mail = new PHPMailer(TRUE);
                
                $mail->setFrom('noreply.msde0@gmail.com', 'Test mail');
                $mail->addAddress('deepti.khanduja@nic.in', 'Deepti Khanduja');
                $mail->addCC('deepti.khanduja89@gmail.com', 'Sanjay Kumar Sinha');
                $mail->addCC('deeps.don89@gmail.com', 'Neeta Chauhan');
                //$mail->addCC('deepti.khanduja89@gmail.com', 'Niraj Goswami');
                $mail->Subject = 'Warning - Security Audit about to expire for ' .$prj;
                $mail->Body = 'Dear All,
                This is to inform you that the Security Audit of your Application ' .$prj .'  is about to expire in '
                .$diff . ' days.
                The Audit Expiry Date is '.$Auditdate .'
                
                This mail has been sent from Reporting Tool developed by NIC-MSDE Team';
                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                
                $mail->Username = 'noreply.msde0@gmail.com';                
                $mail->Password = 'Msde@123';
                    
                $mail->send();

}else{}
}
?>
</body>
</html>