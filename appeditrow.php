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
        <h4 class="text-white">Online Application Edit Form</h4>
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
            <h4 class="nav_top_align"> <i class="fa fa-pencil"></i> Update APPLICATION </h4>
          </div>
        </div>
      </header>
   

<?php

 $rowid= $_GET['varname'];
 include("connection.php");	   
 // SQL query to select data from database
 $sql = "SELECT * FROM server_details where Project_Name LIKE '$rowid' ";
 $result = $conn->query($sql);
//echo "$rowid";
 while(($rows = $result->fetch_assoc()) !== null){
  //  echo "number of rows: " . $result->num_rows;
?>


      <form action="update_app_record.php" method="POST" enctype="multipart/form-data">
      <div class="outer container">
        <div class="inner bg-container">
          <div class="row">
          <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> Project Details </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-6 input_field_sections">
                                        <h5>Project-Name</h5>
                                        <input type="text" class="form-control" name="projectname" id="projectname" value= "<?php echo $rows['Project_Name'];?>" />                                   
                                    </div>

                                    <div class="col-lg-6 input_field_sections">
                                        <h5>CUC code</h5>
                                            <input type="text" class="form-control" name="cuc" id="cuc" value= "<?php echo $rows['CUC'];?>" disabled/>
                                    </div>
                                        
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Website-URL</h5>
                                        <input type="text" class="form-control" name="url" id="url" value= "<?php echo $rows['Website_Name'];?>"/>                                   
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Private-IP</h5>
                                            <input type="text" class="form-control" name="privateip" id="privateip" value= "<?php echo $rows['Private_IP'];?>" disabled/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Public-IP</h5>
                                            <input type="text" class="form-control" name="publicip" id="publicip" value= "<?php echo $rows['Public_IP'];?>" />
                                    </div>
                                
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Designed By</h5>
                                            <input type="text" class="form-control" name="designedby" value= "<?php echo $rows['Designed_By'];?>"/>
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Managed By</h5>
                                            <input type="text" class="form-control" name="managedby" value= "<?php echo $rows['Managed_By'];?>"/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Operating System:</h5>
                                        <select class="form-control" name="os" required>
                                                    <option>Linux</option>
                                                    <option>Windows</option>
                                                </select>
                                    </div>

                            </div>  <!-- row end-->                  
                            </div>  <!-- card block end-->
                    </div>  <!-- card end-->
            </div>  <!-- card -lg -12 end-->
              
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> VA / SSL / Audit Details </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>VA Expiry Date</h5>
                                        <input type="date" class="form-control" name="va" id="va" value= "<?php echo $rows['VA'];?>"/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>SSL Expiry Date</h5>
                                        <input type="date" class="form-control" name="sslenddate" id="sslenddate" value= "<?php echo $rows['SSLEnd_Date'];?>"/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Security Audit Start Date</h5>
                                        <input type="date" class="form-control" name="auditstartdate" id="auditstartdate" value= "<?php echo $rows['AuditStart_Date'];?>"/>                               
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Security Audit Expiry Date</h5>
                                        <input type="date" class="form-control" name="auditenddate" id="auditenddate" value= "<?php echo $rows['AuditEnd_Date'];?>"/>                                
                                    </div>

                            </div>  <!-- row end-->                  
                            </div>  <!-- card block end-->
                    </div>  <!-- card end-->
            </div>  <!-- card -lg -12 end-->

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Antirus Details </div>
                <div class="card-block">
                  <div class="row">
                        <div class="col-lg-4 input_field_sections">
                        <h5>Antivirus Name:</h5>
                            <input type="text" class="form-control" name="avname" value= "<?php echo $rows['Antivirus_Name'];?>"/> 
                        </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>SOC Entry</h5>
                                                <select class="form-control" name="soc" required>
                                                <option>Yes</option>
                                                <option>No</option>
                                                </select>
                        </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Server Hardening</h5>
                        <input type="text" class="form-control" name="hardening" value= "<?php echo $rows['Server_Hardening'];?>"/> 
                    </div>                   
                    
                    <div class="col-lg-12 input_field_sections">
                      <h5>Warning</h5>
                      <input type="text" class="form-control" name="warining" value= "<?php echo $rows['Warnings'];?>"/>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Backup Details </div>
                <div class="card-block">
                  <div class="row">
                        <div class="col-lg-4 input_field_sections">
                        <h5> Backup Policy</h5>
                            <input type="text" class="form-control" name="policy" value= "<?php echo $rows['Backup_Policy'];?>"/>
                        </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>Frequency</h5>
                                                <select class="form-control" name="frequency" required>
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                                </select>
                        </div>

                        <div class="col-lg-4 input_field_sections">
                              <h5>Retention</h5>
                                                <select class="form-control" name="retention" required>
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                                </select>
                        </div>
           
                        
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Antirus Details </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-lg-6 input_field_sections">
                      <h5>SMS service</h5> 
                            <select class="form-control" name="sms" required>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                             </select>
                      </div>
                      <div class="col-lg-6 input_field_sections">
                      <h5>Email service</h5> 
                            <select class="form-control" name="sms" required>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                             </select>
                      </div>
                    </div>                               
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-white text-pink "> Upload Certificate </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-lg-6 input_field_sections">
                      <h5>Upload Security Audit Certificate</h5> 
                        <input type="file" name="auditFile" id="auditFile">  
                    </div>
                    </div>                               
                  </div>
                </div>
              </div>
            </div>

            </div>
            
            <div class="col-lg-12  ">
                 <button class="btn btn-success">Update</button>
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

