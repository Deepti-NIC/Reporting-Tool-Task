<?php
                    session_start();
                    include("connection.php");	
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
	<link  href="css/default.css" rel="stylesheet">

    <script src="js/jquery.min.js" charset="utf8" type="text/javascript"></script>    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.dataTables.min.js" charset="utf8" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/select.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js" type="text/javascript"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js" type="text/javascript"></script>
    
    
    
    <!-- template skin -->


    <script type="text/javascript">
    $(document).ready(function() {
        var editor;
                    editor = new $.fn.dataTable.editor( {
                        ajax: "fetchData.php",
                        table: "#vcdetail",
    
                    fields: [ {
                            label: "ID",
                            name: "id"
                        }, {
                            label: "VC Mode",
                            name: "vcmode"
                        }, {
                            label: "VC ID",
                            name: "vcid"
                        }, {
                            label: "VC Date",
                            name: "vcdate"
                        }
                    ]
                } );

                $('#vcdetail').on( 'click', 'tbody td:not(:first-child)', function (e) {
                    editor.inline( this );
    
                } );
    
                $('#vcdetail').DataTable( {
                    dom: "Bfrtip",
                    ajax: "fetchData.php",
                    order: [[ 1, 'asc' ]],
                    columns: [
                        {
                            data: null,
                            defaultContent: '',
                            className: 'select-checkbox',
                            orderable: false
                        },
                        {"data": 'ID'},
                        {"data": 'VC_Mode'},
                        {"data": 'VC_Id'},
                        {"data": 'VC_Date'},
                    ],
                    select: {
                        style:    'os',
                        selector: 'td:first-child'
                    },
                    buttons: [
                        { extend: "create", editor: editor },
                        { extend: "edit",   editor: editor },
                        { extend: "remove", editor: editor }
                    ]
                } );
        
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
                    <th>VC ID</th>
                    <th>VC Date</th>
                    
                </tr>
            </thead>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        </table>
    </section>


</body>
  
       
</html>