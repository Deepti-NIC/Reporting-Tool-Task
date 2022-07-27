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
    <link rel="shortcut icon" href="img/dummy/msde.png" type="image/x-icon">

    <title>MSDE</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	
	<!-- template skin -->
	<link  href="css/default.css" rel="stylesheet">
<style>
  
  .webcast-modal {
    width: 90%;
    height: 80%;
    margin: 0;
    padding-left: 150px;
  }
  
  .modal-content {
    height: auto;
    min-height: 100%;
    background:antiquewhite;
    border: 20 solid;
    border-radius: 0;
    box-shadow: none;
  }
  .modal-title  {
      color:brown;
  }


 </style>


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

    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">One-stop Application</h2>
                    <h2 class="ultra02">for VC & server</h2>
					</div>
					<div class="wow fadeInUp">
					<h6 class="h-light">It provides the details of VC, Webcast, applications and portals of MSDE</h6>
					</div>
						
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight">
						<img src="img/dummy/tab_new.png" alt="">			
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
<!-- Section: boxes -->
    <?php include 'vc_details.php';?>

<section id="boxes" class="home-section paddingtop-80">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="wow fadeInDown" data-wow-delay="0.1s">
    <div class="section-heading text-center">
    <h4 class="h-bold1">Video-conferences & Events</h4>
    <div class="divider-short"></div>
    <p>NIC-VC Services seamlessly integrate with laptops, desktops, tablets, smart phones, room systems and legacy equipment. VC infrastructure has been provided at the VC studios and are regularly being used Hon’ble Minister, MoS, and all officers across country at all levels.</p>
    </div>
    </div>
    
    </div>
    
    <?php include 'todaysvc.php';?> 
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="user_box">
        <div id="todaysvc" ><h2><?php echo $rowcount;?></h2>
           <h5 >Today's VC</h5></div>
        </div>    
    </div>
    
    <?php include 'vc_details.php';?>    
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="user_box">
        <a href="show_vc_details.php"><h2><?php echo $rowcount;?></h2>
           <h5>Total VC</h5> </a>
           </div>
    </div>
     <div class="wow fadeInUp" data-wow-delay="0.2s">
     <a href="" data-toggle="modal" data-target="#webcast-modal" data-dismiss="modal">
            <div class="user_box">
            <h2>10</h2>
            <h5>Webcasts/Events</h5>            
           </div>       
           </a> 
    </div>
    <div class="wow fadeInUp" data-wow-delay="0.2s">
     <a href="" data-toggle="modal" data-target="#meeting-modal" data-dismiss="modal">
            <div class="user_box">
            <h2>16</h2>
            <h5>Meetings</h5>            
           </div>       
           </a> 
    </div>

    </div>
    </div>
    
    
    
    </section>
    <!-- /Section: boxes -->
    

	
	<!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">


    <div class="container">
        <div class="row">
            
              <div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h4 class="h-bold3">Application details</h4>
                    <div class="divider-short"></div>
					</div>
					</div>
					
				</div>

            <div class="scrolling_apps">
                <div class="col-sm-offset-0 col-md-offset-0 col-lg-2">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">
							 <div class="creat01">
                            <div class="creat_inner01"><a href="server_details.php?id_num=msde"><img src="img/dummy/proc01.png" alt="msde"> </a> </div>
                            </div>
                        <h4>MSDE </h4>
							
						</div>
					</div>
				</div>
                
				<div class="col-sm-offset-0 col-md-offset-0 col-lg-2 col-lg-push-1">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">
						<div class="creat01">
                            <div class="creat_inner02"> <a href="server_details.php?id_num=JSS"> <img src="img/dummy/jss.png" alt="jss"></a>
                           </div>
                          </div>							
							  <h4>JSS</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-offset-0 col-md-offset-0 col-lg-2 col-lg-push-2">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">		
                            <div class="creat01">
                            <div class="creat_inner01"><a href="server_details.php?id_num=sankalp"> <img src="img/dummy/proc03.png" alt="sankalp"></a>
                           </div>                        
                           </div>                           
                              <h4> Sankalp </h4>												
						</div>
					</div>
				</div>
                
            
				<div class="col-sm-offset-0 col-md-offset-0 col-lg-2 col-lg-push-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">
                            <div class="creat01">
                           <div class="creat_inner02"><a href="server_details.php?id_num=NCVET">
                           <img src="img/dummy/ncvet.png" alt="ncvet"></a>
                           </div>
                           </div>
                              <h4>NCVET</h4>
						</div>
					</div>
				</div>

				<div class="col-sm-offset-0 col-md-offset-0 col-lg-2 col-lg-push-4">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">							
                            <div class="creat01">
                           <div class="creat_inner01"><a href="server_details.php?id_num=NQR">
                           <img src="img/dummy/proc04.png" alt="NQR"></a>
                           </div>
                           </div>
                              <h4>NQR </h4>
						</div>
					</div>
				</div>
				<div class="col-sm-offset-0 col-md-offset-0 col-lg-2 col-lg-push-5">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="work_process">							
                            <div class="creat01">
                           <div class="creat_inner01"><a href="server_details.php?id_num=NQR">
                           <img src="img/dummy/proc04.png" alt="NQR"></a>
                           </div>
                           </div>
                              <h4>NQR </h4>
						</div>
					</div>
				</div>
                            
            </div> <!-- end of scrolling_apps-->
            
        </div>
    </div>

	</section>
	<!-- /Section: testimonial -->


	
   
       <!-- Section: boxes -->
<section id="boxes" class="home-section paddingtop-80">
<div class="container">

<div class="col-lg-8 col-lg-offset-2">
<div class="wow fadeInDown" data-wow-delay="0.1s">
<div class="section-heading text-center">
<h6 class="h-bold4">CONTACT US</h6>
<h4 class="h-bold5">GET IN TOUCH</h4>


</div>
</div>

</div>

<div class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="address">
    <img src="img/dummy/address.png" alt="">
        <h2>ADDRESS</h2>
       <h5>Shram Shakti Bhawan</h5>
        
       </div>
  
        
    
</div>
<div class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="address1">
  <img src="img/dummy/phone.png" alt="">
        <h2>TOLL FREE NO   </h2>
       <h5>11-222-333-444</h5>
        
       </div>
  
        
    
</div>

<div class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="address">
  <img src="img/dummy/phone.png" alt="">
        <h2>EMAIL </h2>
       <h5>msdesupport@gov.in</h5>
        
       </div>
   
</div>

<div class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="address1">
        <img src="img/dummy/phone.png" alt="">
            <h2>SUPPPORT HELP LINE </h2>
            <h5>11-222-333-444</h5>
        
    </div>
   
</div>

</div>
</section>
<!-- /Section: boxes --> 
    
<?php include("footer.php");?>	

</div> <!-- end of wrapper div -->
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>



<?php include("modals.php"); ?>




<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	
    <script src="js/custom.js"></script>


</body>

</html>
