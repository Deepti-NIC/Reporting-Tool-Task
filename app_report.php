<?php 
            session_start();
            if(!isset($_SESSION['userSession'])) {
              header("Location: login.php");
            }
?>            


<?php
  include("connection.php");	

  // SQL query to select data from database
  $sql = "SELECT * FROM server_details ORDER BY Managed_By DESC";
  $result = $conn->query($sql);
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
            <h4 class="nav_top_align"> <i class="fa fa-file"></i> Application Report </h4>
          </div>
        </div>
      </header>
      <div class="outer container">
      
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="95%" style="display:block; overflow-x:auto; white-space:nowrap">
              <thead class="thead-dark" style="background:darkgray;">
                  <tr>
                      <th>Project Name</th>
                      <th>URL</th>
                      <th>Public IP</th>
                      <th>Private IP</th>
                      <th>Type of Server</th>
                      <th>Cloud A/c</th>
                      <th>Server Location</th>
                      <th>VM Template</th>
                      <th>VA Last Done On <br> yyyy-mm-dd</th>
                      <th>OS</th>
                      <th>LB/Backup server</th>
                      <th>Security Audit<br>Start Date<br> yyyy-mm-dd</th>
                      <th>Security Audit<br>Expiry Date<br> yyyy-mm-dd</th>
                      <th>SSL Expiry Date</th>
                      <th>Antivirus Name</th>
                      <th>Backup ID</th>
                      <th>Type of service</th>
                      <th>Webserver</th>
                      <th>Database</th>
                      <th>Service Ports</th>
                      <th>Managed By</th>
                      <th style="text-align:center;width:100px;">Actions
                              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                       </th>
                  </tr>
              </thead>
              <tbody style="text-align:center;">
  
              <?php   // LOOP TILL END OF DATA 
                  while($rows=$result->fetch_assoc())
                  {
               ?>
  
                  <tr>
                      <td><?php echo $rows['Project_Name'];?></td>
                      <td><?php echo $rows['Website_Name'];?></td>
                      <td><?php echo $rows['Public_IP'];?></td>
                      <td><?php echo $rows['Private_IP'];?></td>
                      <td><?php echo $rows['VM_Type'];?></td>
                      <td><?php echo $rows['CUC'];?></td>
                      <td><?php echo $rows['Location'];?></td>
                      <td><?php echo $rows['VM_Template'];?></td>
<!--*****************************************************************************-->
<?php if((strtotime(date('Y-m-d'))-strtotime($rows['VA']))/86400  >= 120 ) //  green
                        { 
                        ?>
                            <td style="background-color: #00FF00;"> <?php echo $rows['VA']; ?> </td>
                        <?php
                        }
                        ?>
                        <?php if((strtotime(date('Y-m-d'))-strtotime($rows['VA']))/86400  < 120 ) 
                        { 
                        ?>
                            <td> <?php echo $rows['VA']; ?> </td>
                        <?php
                        }
                        ?>
                        
  <!-- ******************************************************* -->
                      <td><?php echo $rows['OS'];?></td>
                      <td>No</td>
                      <td><?php echo $rows['AuditStart_Date'];?></td>
                      
<!--*****************************************************************************-->
                        <?php if(strtotime(date('Y-m-d')) - strtotime($rows['AuditEnd_Date']) > 30 ) //  green
                        { 
                        ?>
                            <td style="background-color: #00FF00;"> <?php echo $rows['AuditEnd_Date']; ?> </td>
                        <?php
                        }
                        ?>
                        <?php if(strtotime($rows['AuditEnd_Date']) > strtotime(date('Y-m-d'))) //  green
                        { 
                        ?>
                            <td> <?php echo $rows['AuditEnd_Date']; ?> </td>
                        <?php
                        }
                        ?>
<!--*****************************************************************************-->
                      <?php if(strtotime(date('Y-m-d')) - strtotime($rows['SSLEnd_Date']) > 30 ) //  green
                        { 
                        ?>
                            <td style="background-color: #00FF00;"> <?php echo $rows['SSLEnd_Date']; ?> </td>
                        <?php
                        }
                        ?>
                        <?php if(strtotime($rows['SSLEnd_Date']) > strtotime(date('Y-m-d'))) //  green
                        { 
                        ?>
                            <td> <?php echo $rows['SSLEnd_Date']; ?> </td>
                        <?php
                        }
                        ?>
<!--*****************************************************************************-->
                      <td><?php echo $rows['Antivirus_Name'];?></td>
                      <td><?php echo $rows['Backup_Policy'];?></td>
                      <td><?php echo $rows['Services'];?></td>
                      <td><?php echo $rows['Webserver'];?></td>
                      <td><?php echo $rows['DBase'];?></td>
                      <td><?php echo $rows['Ports'];?></td>
                      <td><?php echo $rows['Managed_By'];?></td>
                      <!-- <td>
                          <button id="editrow" type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                          <a style ="color:white;" href="appeditrow.php?varname=<?php echo $rows['Project_Name'] ?>">Edit</a>
                          </button>
                      </td> -->
                  </tr>
         
              <?php
                  }
               ?>
              </tbody>
         
          </table>
          

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
</body>
</html>
