<?php
// database connection code

$con = mysqli_connect('localhost', 'root', 'mysql123','server');

if (!$con) {  die('Could not connect: ' . mysql_error());}
	
$id_num = $_GET['id_num'];

$sql = "SELECT * FROM server_details where Project_Name LIKE '$id_num'";

$rs = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>MSDE server details</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>
	
	  
<body>
	
		<?php
		while($rows=$rs->fetch_assoc())
        {
		?>	
	<section id="about">

	<div class="row section-header">

		<div class="twelve columns">	

		<div class="icon-wrap">
		  <i class="fa fa-group"></i>
	   </div>

	   <h1>Server Details for <?php echo "$id_num" ?></h1>

	   <p class="lead">
			Public IP: <?php echo $rows['Public_IP'];?> <br>Private IP :<?php echo $rows['Private_IP'];?>
	   </p>

	   </div> <!--end twelve cols-->

	</div> <!-- end section-header -->             	

	<div class="row section-content">
		  
		<div class="six columns">
			<h3>Project Details</h3>
			<p>
			Website Name:    <?php echo $rows['Website_Name'];?><br>
			Designed By:     <?php echo $rows['Designed_By'];?><br>
			Managed By:      <?php echo $rows['Managed_By'];?><br>
			<!-- CUC:            <?php echo $rows['CUC'];?><br>
			VM:             <?php echo $rows['VM'];?><br>-->
			Operating System:            <?php echo $rows['OS'];?><br>
			Date of Last VA done:            <?php echo $rows['VA'];?><br>

			</p>
		</div>

		<div class="six columns">
			<h3>Antivirus</h3>

			<p>
			Antivirus Name:  <?php echo $rows['Antivirus_Name'];?> <br>
			SOC Entry:  <?php echo $rows['SOC_Entry'];?>    <br>
			Server Hardening:  <?php echo $rows['Server_Hardening'];?><br>
			Warnings:  <?php echo $rows['Warnings'];?>     <br>


			</p>
		</div>            

	</div> <!-- end section-content -->  

	<div class="row section-content">
		  
		<div class="six columns">
			<h3>SSL and Security Audit</h3>

			<p>SSL Start Date: <?php echo $rows['SSLStart_Date'];?>    <br>	
			SSL End Date: <?php echo $rows['SSLEnd_Date'];?>     <br>
			Audit Start Date: <?php echo $rows['AuditStart_Date'];?>   <br>
			Audit End Date: <?php echo $rows['AuditEnd_Date'];?>   <br>
			</p>
		</div>

		<div class="six columns">
			<h3>Backup</h3>

			<p>
			Backup Policy: <?php echo $rows['Backup_Policy'];?><br>
			Bkp Frequeny:  <?php echo $rows['Bkp_Frequeny'];?><br>
			Bkp Retention: <?php echo $rows['Bkp_Retention'];?><br>
			Bkp Managedby: <?php echo $rows['Bkp_Managedby'];?><br>

			</p>
		</div>            

	</div> <!-- end section-content -->       



</section> <!-- About Section End-->    


		<?php
		}
	
	?>
</table>
</body>
</html>
s