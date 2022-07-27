
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MSDE</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	
	<!-- template skin -->
	<link  href="css/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
	
        <?php  
            if(isset($_SESSION['userSession'])) {
                 include("headeradmin.php");	
            } else {
                 include("headeruser.php");	
            } 

            ?>	

	
    <section id="testimonial" class="chart-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">


    <div class="container">
        <div id="chart-container" class="fusionchart">
            <div><h4>Dashboard depicting VC details for MSDE</h4></div>
            <script src="js/jquery-1.10.2.js"></script>
            <script src="js/fusioncharts.js"></script>
            <script src="js/fusioncharts.charts.js"></script>
            <script src="js/theme/fusioncharts.theme.zune.js"></script>
            <script src="js/app.js"></script>
            <span id="chartcontainer">linechart</span>
            <span id="colchartcontainer">2dchart</span>
            <span id="doughnutcontainer">doughnut</span>
            <span id="piechartcontainer">piechart</span>
            
        </div>
        
    </div>

	</section>
	<!-- /Section: testimonial -->


	
    
    <?php include("footer.php");?>	
    


</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	
	
    <script src="js/custom.js"></script>


</body>

</html>
