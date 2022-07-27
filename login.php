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


	<!-- Section: VC/ WEBCAST -->

    <section id="login" class="login">
		<div class="login-content">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="login_submit.php" method="post" enctype="multipart/form-data">
		                    <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>


		</div>		
    </section>
	
	<!-- /Section: intro -->
    
    	
    
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
