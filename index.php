<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "002",
        legendText: "Device_2",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "003",
        legendText: "Device_3",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
        },
        {
         showInLegend: true, 
        name: "004",
        legendText: "Device_4",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
        }
    ]
 });
 chart.render();
  
 }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>