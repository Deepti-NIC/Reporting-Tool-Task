<?php
// database connection code

include("connection.php");	
 	
$id_num = $_GET['id_num'];

$sql = "SELECT * FROM server_details where Project_Name LIKE '$id_num'";

$rs = mysqli_query($conn, $sql);


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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

   <!-- Script

   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>

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
			<div class="container">
						<div class="row section-header">

							<div class="col-lg-12">	

									<h1>Server Details for <?php echo "$id_num" ?></h1>
									<p class="lead">
											Public IP: <?php echo $rows['Public_IP'];?> <br>
											<!-- Private IP :<?php echo $rows['Private_IP']; ?> -->
									</p>
							</div>
						</div>
						<div class="row section-content">
							
							<div class="col-lg-6">
								<h3>Project Details</h3>
								<p>
								Website Name:    <?php echo $rows['Website_Name'];?><br>
								Designed By:     <?php echo $rows['Designed_By'];?><br>
								Managed By:      <?php echo $rows['Managed_By'];?><br>
								CUC:            <?php echo $rows['CUC'];?><br>
								<!--VM:             <?php echo $rows['VM'];?><br>-->
								Operating System:            <?php echo $rows['OS'];?><br>
								<!-- Date of Last VA done:            <?php echo $rows['VA'];?><br> -->

								</p>
							</div>

							<div class="col-lg-6">
								<h3>Security Audit Details</h3>
								<p>
								Audit Start Date: <?php echo date('d/m/Y',strtotime( $rows['AuditStart_Date']));?>   <br>
								Audit End Date: <?php echo date('d/m/Y',strtotime($rows['AuditEnd_Date']));?>   <br>
								Security Audit Report   <button type="submit" name="submit" style="background:red;"> <a href="docs/msde.pdf">Download File</a></button>
								</p>
							</div>

						</div> <!-- end section-content -->  

						<div class="row section-content">
						<div class="col-lg-6">
								<h3>VA and SSL Details</h3>

								<p>Last VA Done: <?php echo date('d/m/Y',strtotime( $rows['VA']));?>    <br>	
								SSL Expiry Date: <?php echo date('d/m/Y',strtotime( $rows['SSLEnd_Date']));?>     <br>
								Audit Start Date: <?php echo date('d/m/Y',strtotime( $rows['AuditStart_Date']));?>   <br>
								Audit End Date: <?php echo date('d/m/Y',strtotime($rows['AuditEnd_Date']));?>   <br>
								</p>
							</div>
							
						<div class="col-lg-6">
								<h3>Antivirus</h3>

								<p>
								Antivirus Name:  <?php echo $rows['Antivirus_Name'];?> <br>
								SOC Entry:  <?php echo $rows['SOC_Entry'];?>    <br>
								Server Hardening:  <?php echo $rows['Server_Hardening'];?><br>
								Warnings:  <?php echo $rows['Warnings'];?>     <br>


								</p>
							</div>            


							<div class="col-lg-6">
								<h3>Backup</h3>

								<p>
								Backup Policy: <?php echo $rows['Backup_Policy'];?><br>
								Bkp Frequeny:  <?php echo $rows['Bkp_Frequeny'];?><br>
								Bkp Retention: <?php echo $rows['Bkp_Retention'];?><br>
								Bkp Managedby: <?php echo $rows['Bkp_Managedby'];?><br>

								</p>
							</div>            
							<div class="col-lg-6">
								<h3>Serivces</h3>

								<p>
								Email Services: <?php echo $rows['email'];?><br>
								SMS Services:  <?php echo $rows['sms'];?><br>

								</p>
							</div>            

						</div> <!-- end section-content -->       



		</div> <!-- end container -->
		<marquee style="color:gold; font-size:17px; padding-top:50px;"> Contact number of Cloud Team: 011124305000, 62005(SD-01), 62002 (NDCSP Support)</marquee>
</section> <!-- About Section End-->    


		<?php
		}
	
	?>
</table>
</body>
</html>
