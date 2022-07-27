 <?php 
            session_start();
            if(!isset($_SESSION['userSession'])) {
              header("Location: login.php");
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
        <h4 class="text-white">Reporting Tool</h4>
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
            <h4 class="nav_top_align"> <i class="fa fa-file"></i> Admin Query Generate </h4>
          </div>
        </div>
      </header>
   
      <div class="outer container">
        <div class="inner bg-container">
          <div class="row">

          <div class="col-lg-12">
              <div class="card">
                  <form action="" method="POST">
                        <div class="card-header bg-white text-pink ">
                                <div class="col-lg-3 input_field_sections">
                                    Select date:
                                    <input class="form-control" type="date" value="2022-01-01" name="searchdate" />
                                </div>
                                <div class="col-lg-3 input_field_sections">
                                    Enter Mode:
                                    <select class="form-control" name="searchmode" id="searchmode" >
                                                    <option value="NULL">Select</option>
                                                    <option value="Webroom1">Webroom1</option>
                                                    <option value="Webroom2">Webroom2</option>
                                                    <option value="Webroom3">Webroom3</option>
                                                    <option value="BharatVC">BharatVC</option>
                                                    <option value="Reserve">Reserve Portal</option>
                                                    <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 input_field_sections">
                                    Enter VCID:
                                    <input class="form-control" type="text" name="searchvcid" />
                                </div>
                                <div class="col-lg-3 ">
                                    <br />
                                    <button class="btn btn-primary" name="search">GO</button> 
                                </div>
                        </div>
                   </form>
              </div>
            </div>
            <!-- Code to loop through Database based on search query -->
                
            <?php include('admin_search.php'); ?>
                                      
          </div>
        </div>
        <!-- /.inner -->
      </div>
      <!-- /.outer -->
      
      
    </div>
  </div>
  <!-- /#content -->
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- /#wrap -->
<!-- global scripts
<script type="text/javascript" src="js/components.js"></script>-->
<script type="text/javascript" src="js/custom.js"></script>
<!-- end of global scripts-->

<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<!-- end of page level js -->
</body>
</html>
