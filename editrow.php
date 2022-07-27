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
      <div class="container-fluid"> <a class="navbar-brand text-xs-center" href="index-2.html">
        <h4 class="text-white">Online VC Edit Form</h4>
        </a>
        
        <div class="text-xs-right xs_menu">
          <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#nav-content"> ☰ </button>
        </div>
        <!-- Nav Content -->
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="collapse navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-xl-right  top_menu" id="nav-content">
          <ul class="nav navbar-nav top_menubar">
            <li class="nav-item"> <a class="nav-link text-white" href="home.php"> <i class="fa fa-home"></i> <span class="quick_text">Home</span> </a> </li>
            <li class="nav-item"> <a class="nav-link text-white" href="javascript:history.go(-1"> <i class="fa fa-backward"></i> <span class="quick_text">Back</span> </a> </li>
          </ul>
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
            <h4 class="nav_top_align"> <i class="fa fa-pencil"></i> Update VC Detail </h4>
          </div>
        </div>
      </header>
   

<?php

 $rowid= $_GET['selected_row_ID'];
 include("connection.php");	   
 // SQL query to select data from database
 $sql = "SELECT * FROM vc_details where ID=$rowid";
 $result = $conn->query($sql);

 while(($rows = $result->fetch_assoc()) !== null){
  ?>


      <form action="update_vc_record.php" method="POST" enctype="multipart/form-data">
      <div class="outer container">
        <div class="inner bg-container">
          <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> VC Details for ID <?php echo $rows['ID'];?></div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>VC-Mode:</h5>
                                    
                                        <select class="form-control" name="mode" id="mode" required>
                                                    <option value="<?php echo $rows['VC_Mode'];?>"><?php echo $rows['VC_Mode'];?></option>
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
                                            <input type="text" class="form-control" name="vcid" id="vcid" value="<?php echo $rows['VC_Id'];?>"/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Date</h5>
                                                <div class="input-group input-append date" id="dp3" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="date" name="vcdate" value= "<?php echo $rows['VC_Date'];?>" required/>
                                                </div>
                                    </div>
                                
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Start Time</h5>
                                            <input type="time" class="form-control" name="starttime" value="<?php echo $rows['VC_STime'];?>" required/>
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>End Time</h5>
                                            <input type="time" class="form-control" name="endtime" value="<?php echo $rows['VC_ETime'];?>"/>
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
                    <div class="col-lg-12 input_field_sections">
                      <h5>Description:</h5>
                        <textarea class="form-control" rows="2" name="comment" required><?php echo $rows['Description'];?></textarea>
                    </div>
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
                        <input type="text" class="form-control" name="cname" value="<?php echo $rows['CName'];?>" required/>
                    </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>Department:</h5>
                                                <select class="form-control" name="cdept" value="<?php echo $rows['CDept'];?>" required>
                                                <option>MSDE</option>
                                                <option>Sankalp</option>
                                                <option>NIMI</option>
                                                <option>NCVET</option>
                                                <option>JSS</option>
                                                <option>DGT</option>
                                                </select>
                        </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Designation:</h5>
                        <input type="text" class="form-control" name="cdesig" value="<?php echo $rows['CDesig'];?>" required/>
                    </div>
                    
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Contact:</h5>
                        <input type="tel" id="cphone" name="phone"  pattern="+91[7-9]{2}-[0-9]{3}-[0-9]{4}" value="<?php echo $rows['CNumber'];?>" required>
                    </div>
                    
                     <div class="col-lg-4 input_field_sections">
                      <h5>Email ID:</h5>
                                <input type="email" class="form-control" name="cemail" value="<?php echo $rows['CEmail'];?>" required/>
                    </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Email Dated:</h5>
                                    <input type="date" class="form-control" name="cdated" value="<?php echo $rows['CEmailDated'];?>" required/>
                    </div>
                    
                    <div class="col-lg-12 input_field_sections">
                     <h5>Add more VC Links(if any):</h5>
                                    <textarea class="form-control" rows="3" name="cremarks" required><?php echo $rows['CRemarks'];?></textarea>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-12  ">

            <input style="display:none" type="text" class="form-control" name="ID" value="<?php echo $rows['ID'];?>"/>
                  <button class="btn btn-success">Submit</button>
            </div>
            
          </div>
        </div>
        <!-- /.inner -->
      </div>
      <!-- /.outer -->
      
    </form>
      
    <?php }?>
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

