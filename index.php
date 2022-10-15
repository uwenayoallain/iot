<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
    include "temp_data.php";
    ?>
    <script>
        window.onload = function () {
 
 var chart = new CanvasJS.Chart("chartContainer", {
     title: {
         text: "Device Temperature Statistics"
     },
     axisY: {
         title: "temperature"
     },
     data: [{
        showInLegend: true, 
        name: "series1",
        legendText: "device-01",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "series2",
        legendText: "device-02",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        },{
            showInLegend: true, 
        name: "series3",
        legendText: "device-03",
         type: "line",
         dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
        },
        {
         showInLegend: true, 
        name: "series4",
        legendText: "device-04",
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