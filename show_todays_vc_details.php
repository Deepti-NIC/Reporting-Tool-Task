<?php include 'todaysvc.php';?> 
    
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
     

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- template skin -->
	<link  href="css/default.css" rel="stylesheet">

    <script type="text/javascript">
    $(document).ready(function() {
        $('#vcdetail').dataTable({
            "processing": true,
            "ajax": "fetchDataToday.php",
            "columns": [
                {"data": 'ID', "searchable":false},
                {"data": 'VC_Mode'},
                {"data": 'VC_Id'},
                {"data": 'VC_Date'},
                {"data": 'VC_STime'},
                {"data": 'Description'}
                
            ]
        });
        $('#vcdetail').dataTable.ext.errMode = function(obj, param, err){
            console.log('error');
        };

    });
    </script>


    <!-- CSS FOR STYLING THE PAGE -->
</head>
  
<body>
    <section class="vc_detail">
        <h1>Details of Today's VC</h1>
        <!-- TABLE CONSTRUCTION-->
            
        <table class="styled-table" id="vcdetail">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VC Mode</th>
                    <th>VC ID/AccessCode</th>
                    <th>VC Date</th>
                    <th>VC Start Time</th>
                    <th>Description</th>
                    
                </tr>
            </thead>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        </table>
    </section>


</body>
  
       
</html>