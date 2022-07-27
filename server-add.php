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
            <h4 class="nav_top_align"> <i class="fa fa-pencil"></i> ADD NEW APPLICATION </h4>
          </div>
        </div>
      </header>
   
      <form action="add-server-details.php" method="POST" enctype="multipart/form-data">
      <div class="outer container">
        <div class="inner bg-container">
          <div class="row">

            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> Project Details </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Project-Name</h5>
                                        <input type="text" class="form-control" name="projectname" id="projectname" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Cloud A/C Number</h5>
                                            <input type="text" class="form-control" name="cuc" id="cuc" required/>
                                    </div>
                                  <!-- Added fields type of vm and location -->
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Type of VM</h5>
                                        <select class="form-control" name="VM_Type" required>
                                                    <option value="Cloud VM">Cloud VM</option>
                                                    <option value="Physical">Physical</option>
                                                </select>
                                    </div>
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Server Location</h5>
                                        <select class="form-control" name="Location" required>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Bhubaneswar">Bhubaneswar</option>
                                                </select>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Website-URL</h5>
                                        <input type="text" class="form-control" name="url" id="url" required/>                                   
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Private-IP</h5>
                                            <input type="text" class="form-control" name="privateip" id="privateip" required/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Public-IP</h5>
                                            <input type="text" class="form-control" name="publicip" id="publicip" required/>
                                    </div>
                                
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Designed By</h5>
                                            <input type="text" class="form-control" name="designedby" required/>
                                    </div>

                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Managed By</h5>
                                            <input type="text" class="form-control" name="managedby" required/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                      <h5>Operating System</h5>
                                            <input type="text" class="form-control" name="os" required/>
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
                                        <input type="date" class="form-control" name="va" id="va" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>SSL Expiry Date</h5>
                                        <input type="date" class="form-control" name="sslenddate" id="sslenddate" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Security Audit Start Date</h5>
                                        <input type="date" class="form-control" name="auditstartdate" id="auditstartdate" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Security Audit Expiry Date</h5>
                                        <input type="date" class="form-control" name="auditenddate" id="auditenddate" required/>                                   
                                    </div>

                            </div>  <!-- row end-->                  
                            </div>  <!-- card block end-->
                    </div>  <!-- card end-->
            </div>  <!-- card -lg -12 end-->

            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-white text-pink "> Software Details </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-12 input_field_sections">
                                        <h5>VM Template</h5>
                                        <input type="text" class="form-control" name="VM_Template" id="VM_Template" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Webserver</h5>
                                        <input type="text" class="form-control" name="Webserver" id="Webserver" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Database</h5>
                                        <input type="text" class="form-control" name="DBase" id="DBase" required/>                                   
                                    </div>

                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Type of Service</h5>
                                        <input type="text" class="form-control" name="Services" id="Services" required/>                                   
                                    </div>
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>Service Ports</h5>
                                        <input type="text" class="form-control" name="Ports" id="Ports" required/>                                   
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
                            <input type="text" class="form-control" name="avname"/>
                        </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>SOC Entry</h5>
                                                <select class="form-control" name="soc" >
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                </select>
                        </div>
                    
                    
                    <div class="col-lg-4 input_field_sections">
                      <h5>Server Hardening</h5>
                        <input type="text" class="form-control" name="hardening" />
                    </div>                   
                    
                    <div class="col-lg-12 input_field_sections">
                      <h5>Warning</h5>
                      <input type="text" class="form-control" name="warining" />
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
                            <input type="text" class="form-control" name="policy"/>
                        </div>
                        <div class="col-lg-4 input_field_sections">
                              <h5>Frequency</h5>
                                                <select class="form-control" name="frequency" >
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                                </select>
                        </div>

                        <div class="col-lg-4 input_field_sections">
                              <h5>Retention</h5>
                                                <select class="form-control" name="retention">
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
                <div class="card-header bg-white text-pink "> SMS/EMail Details </div>
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

              <!-- <div class="col-lg-12">
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
            </div> -->

            </div>
            
            <div class="col-lg-12  ">
                <button class="btn btn-success">Submit</button>
                  <input class="btn btn-warning" type="reset" value="Reset">
                  <button class="btn btn-danger" onclick="history.go(-1);">Close</button>

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
