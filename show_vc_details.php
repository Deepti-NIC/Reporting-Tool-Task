<?php 
session_start();
?>

<?php  
  
  include("connection.php");	

  // SQL query to select data from database
  $sql = "SELECT * FROM vc_details";
  $result = $conn->query($sql);
  //$sortvalue = "VC_Date";
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
      <link href="css/style1.css" rel="stylesheet">
  
      <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="css/dataTables.tableTools.min.css">
  
  
      <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/buttons.colVis.min.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.print.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/buttons.bootstrap.min.js"></script>
        <script src="js/jszip.min.js"></script>
        <script src="js/pdfmake.min.js"></script>
        
        <script src="js/vfs_fonts.js"></script>
        <script src="js/bootstrap.min.js"></script><!--/Data Table Declarations-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- template skin -->
      <link  href="css/default.css" rel="stylesheet">

      <script type="text/javascript">
     $(document).ready(function() {
      //Only needed for the filename of export files.
      //Normally set in the title tag of your page.
      document.title='VC DataTable';
      // DataTable initialisation
      $('#example').DataTable(
          {
              "dom": '<"dt-buttons"Bf><"clear">lirtp',
              "paging": true,
//              "scrollX":        true,
              "autoWidth": true,
              "columnDefs": [
                {"width": "9%", "targets": 1 },
                  { "orderable": false, "targets": 10}
              ],
              "buttons": [	
                { extend: 'copy', className: 'btn btn-success glyphicon glyphicon-book' },
                { extend: 'csv', className: 'btn btn-primary glyphicon glyphicon-list-alt' },
                { extend: 'excel', className: 'btn btn-warning glyphicon glyphicon-list-alt' },
                { extend: 'pdf', className: 'btn btn-danger glyphicon glyphicon-file' },
                { extend: 'print', className: 'btn btn-info glyphicon glyphicon-print' }
              ]
          }
      );
      //Add row button
      $('.dt-add').each(function () {
          $(this).on('click', function(evt){
         
            //Create some data and insert it
              var rowData = [];
              var table = $('#example').DataTable();
              //Store next row number in array
              var info = table.page.info();

              //REMOVE EDIT AND DELETE EVENTS FROM ALL BUTTONS
              //CREATE NEW CLICK EVENTS
          });
      });
      //Edit row buttons
      $('.dt-edit').each(function () {
          $(this).on('click', function(evt){
              $this = $(this);
              var dtRow = $this.parents('tr');
              var selectedID=dtRow[0].cells[0].innerHTML
              console.log(selectedID);  //shows id of the delete row on console
                  var table = $('#example').DataTable();
                         $.ajax({
                              type: "GET",
                              url: "editrow.php",
                              data: {selectedrowID: selectedID},
                              cache: false,
                              success: function( data ) {
                                     console.log( data );
                                     if (data) {
                                          window.location = "editrow.php?selected_row_ID="+selectedID;
                                     }
                              }
                          }).done(function(){
                                  // this part will run when we send and return successfully
                                  console.log("Success.");
                              }).fail(function(){
                                  // this part will run when an error occurres
                                  console.log("An error has occurred.");
                              });
          });
      });
      //Delete buttons
      $('.dt-delete').each(function () {
          $(this).on('click',function(evt){
              console.log("click");
               $this = $(this);
              var dtRow = $this.parents('tr');
              var selectedID=dtRow[0].cells[1].innerHTML
              console.log(selectedID);  //shows id of the delete row on console
              if(confirm("Are you sure to delete this row?")){
                  var table = $('#example').DataTable();
                  table.row(dtRow[0].rowIndex-1).remove().draw( false );
                         $.ajax({
                              type: "POST",
                              url: "deleterow.php",
                              data: {selectedrowID: selectedID},
                              cache: false,
                              success: function( data ) {
                                     console.log( data );
                              }
                          }).done(function(){
                                  // this part will run when we send and return successfully
                                  console.log("Success.");
                              }).fail(function(){
                                  // this part will run when an error occurres
                                  console.log("An error has occurred.");
                              });
              }
  
          });
      });
  });
      </script>
  
  
      <!-- CSS FOR STYLING THE PAGE -->
  </head>
    
  <body>
      <section class="vc_detail">
        
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
				<div>
                 <span class="left"><h3>Details of VideoConferences</h3></span>
                 <span class="right">
                     <a class="cta-btn1" href="javascript:history.go(-1)">Back</a>
                     <a class="cta-btn1" href="home.php">Home</a>
                    </span>
                </div>
				</div>
			</div>
		</div>
       </nav>
       <br><br>
            
          </ul>
          <hr>
          <!-- TABLE CONSTRUCTION-->
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="95%">
              <thead class="thead-dark" style="background:darkgray;">
                  <tr>
                      <th>ID</th>
                      <th>VC Date</th>
                      <th>Mode</th>
                      <th>VC ID</th>
                      <th>Start Time</th>
                      <th>Descriptions</th>
                      <th>Name</th>
                      <th>Dept</th>
                      <th>Design.</th>
                      <th>Contact</th>
                      <th>Additional VC Links</th>                 
                      <th style="text-align:center;width:100px;">Actions
                              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                       </th>
                  </tr>
              </thead>
              <tbody>
  
              <?php   // LOOP TILL END OF DATA 
                  while($rows=$result->fetch_assoc())
                  {
               ?>
  
                  <tr>
                      <td><?php echo $rows['ID'];?></td>
                      <td><?php echo $rows['VC_Date'];?></td>
                      <td><?php echo $rows['VC_Mode'];?></td>
                      <td><?php echo $rows['VC_Id'];?></td>
                      <td><?php echo $rows['VC_STime'];?></td>
                      <td><?php echo $rows['Description'];?></td>
                      <td><?php echo $rows['CName'];?></td>
                      <td><?php echo $rows['CDept'];?></td>
                      <td><?php echo $rows['CDesig'];?></td>
                      <td><?php echo $rows['CNumber'];?></td>
                      <td><?php echo $rows['CRemarks'];?></td>
                      <td>
                      <?php  
                        if(isset($_SESSION['userSession'])) {
                      ?>
                          <button id="editrow" type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                          </button>
                          <button type="button" class="btn btn-danger btn-xs dt-delete">
                              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                          </button>
                      <?php } ?>
                      </td>
                  </tr>
         
              <?php
                  }
               ?>
              </tbody>
         
          </table>
          
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Row information</h4>
                </div>
                <div class="modal-body">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
          
            </div>
          </div>
      </section>
  </body>
    
         
  </html>