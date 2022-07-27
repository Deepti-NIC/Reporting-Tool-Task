<html>
<head></head>

<body>

<?php 

$rowid= $_POST['selectedrowID'];    
echo $rowid;   
include("connection.php");	
$sql = "delete from vc_details where ID=$rowid;";
$result = $conn->query($sql);

?>

</body>
</html>

