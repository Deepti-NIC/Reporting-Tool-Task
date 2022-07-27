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
<style>
 
h3 {
  font-size: 1.75rem;
  color: #373d51;
  padding: 1.3rem;
  margin: 0;
}
    .accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.45rem;
  font-weight: 400;
  border-bottom: 1px solid #e5e5e5;
}
.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  color: #ff5353;
}
.accordion a:hover::after {
  border: 1px solid #ff5353;
}
.accordion a.active {
  color: #ff5353;
  border-bottom: 1px solid #ff5353;
}
.accordion a::after {
  content: '+';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 2rem;
  color: #7288a2;
  padding: 5px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #7288a2;
  text-align: center;
}
.accordion a.active::after {
  content: '-';
  color: #ff5353;
  border: 1px solid #ff5353;
}
.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}
.accordion .content p {
  font-size: 1.4rem;
  font-weight: 300;
  padding: 0px 85px 0px 85px;
}
.accordion .content p a{
  color: blue;
  border: none;
  content: none;
}
.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
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

	
    <section id="testimonial" class="chart-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">


    <div class="container">
        <div id="faq" class="faq">
            <div><h4>FAQs</h4></div>
            
            <section id="boxes" class="home-section paddingtop-80">
                        
                    <div class="accordion">
                        <div class="accordion-item">
                           <a>FAQS Regarding E-FORMS</a>
                            <div class="content">
                                <p><a href="docs/e-forms.pdf">Manual to Submit E-Forms</a><br> The purpose of this document is to provide step by step instructions to the users for filling the forms to avail several services available under the eForms.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a href="docs/kavach.pdf">FAQS Regarding KAVACH</a>
                        </div>
                        <div class="accordion-item">
                            <a>FAQS Regarding VIDEOCONFERENCING</a>
                            <div class="content">
                                <p><a href="docs/guidelines.pdf">Gneral Guidelines for VC users on Reserve Portal</a>
                                <a href="docs/Bharat VC.pdf">Gneral Guidelines for VC users on BharatVC Portal</a></p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a href="docs/vidyodesktop.pdf">FAQS Regarding WEBROOMS</a>
                        </div>
                        <div class="accordion-item">
                            <a href="#">FAQS Regarding E-office</a>
                        </div>

                    </div>
                    
             </section>

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
<script>
const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

</body>

</html>
