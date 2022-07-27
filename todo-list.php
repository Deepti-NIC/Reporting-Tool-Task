<?php 
            session_start();
            if(!isset($_SESSION['userSession'])) {
              header("Location: login.php");
            }
?>            


<?php
  include("connection.php");	

  // SQL query to select data from database
  $sql = "SELECT * FROM todo order by dated desc";
  $result = $conn->query($sql);
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
    <link href="css/default.css" rel="stylesheet">
    <style>
        h3 {
            font-size: 1.75rem;
            color: #373d51;
            padding: 1.3rem;
            margin: 0;
        }
    </style>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">

        <?php
        if (isset($_SESSION['userSession'])) {
            include("headeradmin.php");
        } else {
            include("headeruser.php");
        }

        ?>


        <section id="testimonial" class="chart-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div id="faq" class="faq">
                    <section class="vh-100" style="background-color:white;">
                        <div class="container py-5 h-100" style="padding-right:50px;">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-10">
                                    <div class="card" >
                                        <div class="card-header p-3">
                                            <h2 style="color:black;">ToDo List</h2>
                                        </div>
                                        <div class="card-body" style=" overflow-y:auto; position: relative; height: 400px">
                            
                            
                                        <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Team Member</th>
                                                        <th scope="col">Task Details</th>
                                                        <th scope="col">Dated</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                        <?php   // LOOP TILL END OF DATA 
                                        while($rows=$result->fetch_assoc())
                                         {
                                        ?>
                                                    <tr class="fw-normal">
                                                        <th>
                                                            <span class="ms-2"><?php echo $rows['team_member'];?></span>
                                                        </th>
                                                        <td class="align-middle">
                                                            <span><?php echo $rows['task_list'];?></span>
                                                            <small class="label label-warning"><i class="fa fa-clock-o"></i><?php echo $rows['days'];?>days</small>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span><?php echo $rows['dated'];?></span>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a onclick="" data-mdb-toggle="tooltip" title="Remove"><i class="fa fa-trash text-danger fa-2x"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                          
                                        </div>
                                        <div class="card-footer text-end p-3">
                                            <button class="btn btn-primary"  data-toggle="modal" data-target="#edit-todo">Add Task</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </section>
        <!-- /Section: testimonial -->



        <?php include("footer.php"); ?>

    </div>



	<!-- The Modal -->
	<div class="modal" id="edit-todo">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header" style="background:#ee893f;">
			        <h4 class="modal-title">Add Task</h4>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="addtodo.php" method="post" id="edit-form">
		        		<input class="form-control" type="hidden" name="id">
				    	<div class="form-group">
						    <label for="team_member">Team Member Name</label>
						    <input class="form-control" type="text" name="team_member">
					  	</div>
					  	<div class="form-group">
						    <label for="task_list">Task Details</label>
						    <input class="form-control" type="text" name="task_list">
					  	</div>
					  	<div class="form-group">
						    <label for="days">Number of Days to be taken</label>
						    <input style="background:black;" class="form-control" type="number" name="days">
					  	</div>
					  	<button type="submit" class="btn btn-primary" id="btnUpdateSubmit">Add</button>
					  	<button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
					</form>
		      	</div>
		    </div>
	  	</div>
	</div>



    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>



</body>

</html>