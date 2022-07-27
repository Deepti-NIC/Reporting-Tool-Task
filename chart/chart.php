<html>
<head>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<?php
// database connection code

$con = mysqli_connect('localhost', 'root', 'mysql123','server');

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

$myquery = "  SELECT * FROM  vc_details";
$query = mysqli_query($con,$myquery);

if ( ! $query ) {
    echo mysql_error();
    die;
  }

  $data = array();


  while($rows=$query->fetch_assoc())
  {  $data[] =$rows;
}

echo json_encode($data);
?>

<body>
  <div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("php/data.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data);
        chart.container("container");
        chart.draw();
      });
    });
  </script>
</body>
</html>
