<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" type="text/css" href="styles.css" />
    <title>Human Temperature Analytics</title>
    <?php
    include "data.php";
    ?>
    <script>
        window.onload = function () {
 
 var chart = new CanvasJS.Chart("chartContainer", {
     title: {
         text: "Human Temperature Analytics"
     },
     axisY: {
         title: "Temperature"
     },
     data: [{
        showInLegend: true, 
        name: "001",
        legendText: "Device_1",
         type: "line",
         dataPoints: <?php echo json_encode($_001, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "002",
        legendText: "Device_2",
         type: "line",
         dataPoints: <?php echo json_encode($_002, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "003",
        legendText: "Device_3",
         type: "line",
         dataPoints: <?php echo json_encode($_003, JSON_NUMERIC_CHECK); ?>
        },
        {
         showInLegend: true, 
        name: "004",
        legendText: "Device_4",
         type: "line",
         dataPoints: <?php echo json_encode($_004, JSON_NUMERIC_CHECK); ?>
        }
    ]
 });
 chart.render();
  
 }
    </script>
</head>
<body>
  <div class="container">
    <div>
      <div>
        <h1>
    HUMAN TEMPERATURE ANALYTICS
  </h1>
  <h1>
    Name: <span>UWENAYO Alain Pacifique Y3 A</span>
  </h1>
<div id="chartContainer"></div>
      </div>
    </div>
  </div>
  <footer>
    COPY RIGHT ALL RIGHTS RESERVED made with 💖 by  @uwenayoallain 😍
  </footer>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>