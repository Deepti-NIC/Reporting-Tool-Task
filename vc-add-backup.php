<?php 
session_start();

$mysqli = mysqli_connect('localhost', 'root', 'mysql123','server');
    
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}


?>



<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="UTF-8">
<title>msde</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- global styles-->
<link type="text/css" rel="stylesheet" href="css/components.css"/>
<link type="text/css" rel="stylesheet" href="css/custom.css"/>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!--End of Global styles-->
<!--plugin styles-->
<link type="text/css" rel="stylesheet" href="css/bootstrapValidator.min.css"/>

<!--End of plugin styles-->
<!--Page level styles-->



<!-- end of page level styles -->
</head>
<body><div class="bg-dark" id="wrap">
  <div id="top">
    <!-- .navbar -->
    <nav class="navbar navbar-static-top">
      <div class="container-fluid"> <a class="navbar-brand text-xs-center" href="#">
        <h4 class="text-white">Online VC Application</h4>
        </a>
        
        <div class="text-xs-right xs_menu">
          <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#nav-content"> ☰ </button>
        </div>
        <!-- Nav Content -->
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="collapse navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-xl-right  top_menu" id="nav-content">
          <ul class="nav navbar-nav top_menubar">
            <li class="nav-item"> <a class="nav-link text-white" a href="javascript:history.go(-1)" title="Return to previous page"> <i class="fa fa-backward"></i> <span class="quick_text">Back</span> </a> </li>
            <ul>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->
    <!-- /.head -->
  </div>
  <!-- /#top -->
  <div class="wrapper">
    
    <!-- /#left -->
    <div id="content" class="bg-container">
      <header class="head">
        <div class="main-bar row">
          <div class="col-sm-5 col-lg-6 skin_txt">
            <h4 class="nav_top_align"> <i class="fa fa-pencil"></i> ONLINE VC APPLICATION </h4>
          </div>
        </div>
      </header>
   
      <form action="add-vc-details.php" method="POST" enctype="multipart/form-data">
      <div class="outer container">
        <div class="inner bg-container">
          <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> VC Details </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>VC-Mode:</h5>
                                    
                                        <select class="form-control" name="mode" id="mode" required>
                                                    <option value="NULL">Select</option>
                                                    <option value="Webroom1">Webroom1</option>
                                                    <option value="Webroom2">Webroom2</option>
                                                    <option value="Webroom3">Webroom3</option>
                                                    <option value="BharatVC">BharatVC</option>
                                                    <option value="Reserve">Reserve Portal</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                    
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>VCID/Access Code:</h5>
                                            <input type="text" class="form-control" name="vcid" id="vcid" disabled/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Date</h5>
                                                <div class="input-group input-append date" id="dp3" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="date" name="vcdate" required/>
                                                </div>
                                    </div>
                                
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Start Time</h5>
                                            <input type="time" class="form-control" name="starttime" required/>
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>End Time</h5>
                                            <input type="time" class="form-control" name="endtime"/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Email Sent:</h5>
                                        <select class="form-control" name="mailsent" required>
                                                    <option>No</option>
                                                    <option>Yes</option>
                                                </select>
                                    </div>

                            </div>  <!-- row end-->                  
                            </div>  <!-- card block end-->
                    </div>  <!-- card end-->
            </div>  <!-- card -lg -12 end-->


            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Description </div>
                <div class="card-block">
                  
                  <div class="row">
                    <div class="col-lg-8 input_field_sections">
                      <h5>Description:</h5>
                        <textarea class="form-control" rows="4" name="comment" required></textarea>
                    </div>
                    <div class="col-lg-4 input_field_sections">
                      <h5>VC Studios:</h5>
                        <select name="studios[]" multiple="multiple">
                            <?php 

                            echo $r="SELECT * FROM vc_studios ;";
                            $rr = mysqli_query($mysqli,$r);
                            while($row= mysqli_fetch_array($rr))
                            {             ?>
                        <option value="<?php echo $row['studio']; ?>"><?php echo $row['studio']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                  
                </div>
              </div>
            </div>
              
  
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Contact Person Details </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-lg-4 input_field_sections">
                      <h5>Name:</h5>
                        <input type="text" class="form-control" name="cname" required/>
                     </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>Department:</h5>
                                                <select class="form-control" name="cdept" required>
                                                <option>MSDE</option>
                                                <option>DGT</option>
                                                <option>NCVET</option>
                                                <option>NDSC</option>
                                                <option>Others</option>
                                                </select>
                        </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Designation:</h5>
                        <input type="text" class="form-control" name="cdesig" required/>
                    </div>
                    
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Contact:</h5>
                        <input type="tel" id="cphone" name="phone"  pattern="+91[7-9]{2}-[0-9]{3}-[0-9]{4}" value="+91" required>
                    </div>
                    
                     <div class="col-lg-4 input_field_sections">
                      <h5>Email ID:</h5>
                                <input type="email" class="form-control" name="cemail" required/>
                    </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Email Dated:</h5>
                                    <input type="date" class="form-control" name="cdated" required/>
                    </div>
                    
                    <div class="col-lg-12 input_field_sections">
                      <h5>Remarks:</h5>
                                    <input type="text" class="form-control" name="cremarks"/>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            <div class="col-lg-12  ">
                  <button class="btn btn-success">Submit</button>
                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input class="btn btn-primary" type="submit" value="close">
            </div>
            
          </div>
        </div>
        <!-- /.inner -->
      </div>
      <!-- /.outer -->
      
    </form>
      
    </div>
  </div>
  <!-- /#content -->
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- end of global scripts-->

<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<!-- end of page level js -->
</body>
</html>
