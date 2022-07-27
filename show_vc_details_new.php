<?php  
  
$mysqli = mysqli_connect('localhost', 'root', 'mysql123','server');
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM vc_details";
$result = $mysqli->query($sql);
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.min.css">

    <script src="js/jquery.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<!--/Data Table Declarations-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- template skin -->
	<link  href="css/default.css" rel="stylesheet">

    <script type="text/javascript">
    var editor; 
    $(document).ready(function() {

         // Edit record
                $('#vcdetail').on('click', 'td.editor-edit', function (e) {
                    
                    e.preventDefault();
                    var id = $(this).data('ID');
            
                    
                } );
            
                // Delete a record
                $('#vcdetail').on('click', 'td.editor-delete', function (e) {
                    e.preventDefault();
            
                    alert("delete");
                } );
                    

        $('#vcdetail').DataTable({
            "dom": 'Bfrtip',
		    "buttons": ['csv', 'excel', 'pdf', 'print','excel','pageLength'],             	
		    "pageLength": 100,
		    "processing": true,
            "sAjaxSource": "fetchData.php",
            "columns": [
                {"data": 'ID', "searchable":false},
                {"data": 'VC_Mode'},
                {"data": 'VC_Id'},
                {"data": 'VC_Date'},
                {"data": 'VC_STime'},
                {"data": 'CName'},
                {"data": 'CDept'},
                {"data": 'CDesig'},
                {"data": 'CNumber'},
                {"data": 'CEmail'},
                {"data": 'CEmailDated'},
                {"data": 'Description'},
                {
                data: null,
                className: "dt-center editor-edit",
                defaultContent: '<i class="fa fa-pencil"/>',
                orderable: false
                },
                {
                data: null,
                className: "dt-center editor-delete",
                defaultContent: '<i class="fa fa-trash"/>',
                orderable: false
                }
                
            ]
        });

    });
    </script>


    <!-- CSS FOR STYLING THE PAGE -->
</head>
  
<body>
    <section class="vc_detail">
        <h1>Details of VideoConferences</h1>
        <!-- TABLE CONSTRUCTION-->
            
        <table class="styled-table" id="vcdetail">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VC Mode</th>
                    <th>VC ID/AccessCode</th>
                    <th>VC Date</th>
                    <th>VC Start Time</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Email Dated</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        </table>
    </section>
</body>
  
       
</html>