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
<style>
form .likert {
  list-style:none;
  width:100%;
  margin:0;
  padding:0 0 35px;
  display:block;
  border-bottom:2px solid #efefef;
}
form .likert:last-of-type {border-bottom:0;}
form .likert:before {
  content: '';
  position:relative;
  top:11px;
  left:9.5%;
  display:block;
  background-color:#efefef;
  height:4px;
  width:78%;
}
form .likert li {
  display:inline-block;
  width:19%;
  text-align:center;
  vertical-align: top;
}
form .likert li input[type=radio] {
  display:block;
  position:relative;
  top:0;
  left:50%;
  margin-left:-6px;
  
}
form .likert li label {width:100%;}
form .buttons {
  margin:30px 0;
  padding:0 4.25%;
  text-align:right
} 
form .buttons button {
  padding: 5px 10px;
  background-color: #67ab49;
  border: 0;
  border-radius: 3px;
}
form .buttons .clear {background-color: #e9e9e9;}
form .buttons .submit {background-color: #67ab49;} 
form .buttons .clear:hover {background-color: #ccc;}
form .buttons .submit:hover {background-color: #14892c;} 
    </style>
	
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
        <div id="faq" class="faq">
            <div> <h4>Feedback Page</h4></div>
                <form action="feedback-submit.php" metho="post">
                <div class="outer container">
                  <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-3 input_field_sections">
                                                    <h5>Enter Subject</h5>
                                                </div>
                                                <div class="col-lg-9 input_field_sections">
                                                    <select class="form-control" name="subject" id="subject" required>
                                                                <option value="VideoConference">VideoConference</option>
                                                                <option value="Website">Website</option>
                                                                <option value="Network">Network</option>
                                                                <option value="Others">Others</option>
                                                            </select>                                
                                                </div>
                                        </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>  <!-- card -lg -12 end-->
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-3 input_field_sections">
                                                    <h5>Enter Department</h5>
                                                </div>
                                                <div class="col-lg-9 input_field_sections">
                                                    <select class="form-control" name="dept" id="dept" required>
                                                                <option value="MSDE">MSDE</option>
                                                                <option value="JSS">JSS</option>
                                                                <option value="NIC">NIC</option>
                                                                <option value="DGT">DGT</option>
                                                                <option value="NCVET">NCVET</option>
                                                            </select>                                
                                                </div>
                                        </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>  <!-- card -lg -12 end-->

                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-3 input_field_sections">
                                                    <h5>Enter Email-ID</h5>
                                                </div>
                                                <div class="col-lg-9 input_field_sections">
                                                <textarea class="form-control" rows="1" name="emailid" required></textarea>                        
                                                </div>
                                        </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-3 input_field_sections">
                                                    <h5>Description</h5>
                                                </div>
                                                <div class="col-lg-9 input_field_sections">
                                                    <textarea class="form-control" rows="2" name="comment" required></textarea>                                                </div>
                                        </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-3 input_field_sections">
                                                    <h5>Rating</h5>
                                                </div>
                                                <div class="col-lg-9 input_field_sections">
                                                                        <ul class='likert'>
                                                                        <li>
                                                                            <input  type="radio" name="likert" value="strong_agree">
                                                                            <label style="color:Green";>Satisfied</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" name="likert" value="strong_agree">
                                                                            <label style="color:Olive";>Partially Satisfied</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" name="likert" value="strong_agree">
                                                                            <label style="color:Yellow";>Neutral</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" name="likert" value="disagree">
                                                                            <label style="color:Pink";>Partially Unsatisfied</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" name="likert" value="strong_agree">
                                                                            <label style="color:Red";>Unsatified</label>
                                                                        </li>
                                                                        </ul>    
                                            
                                            
                                            </div>
                                        </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br>                      
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-6 input_field_sections">
                                                </div>
                                                <div class="col-lg-6 input_field_sections">
                                                    <button class="btn btn-success">Submit</button>
                                                      <input class="btn btn-danger" type="reset" value="Reset">
                                                </div>
                                            </div>  <!-- row end-->                  
                                        </div>  <!-- card block end-->
                                </div>  <!-- card end-->
                        </div>

                    </div><!-- row end-->  
                </div> <!-- innerbg-->  
                
            </div> <!-- outer con-->  

            
       </form>            
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
