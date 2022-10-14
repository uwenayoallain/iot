<!doctype html>
<html>
<head>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <style type="text/css">
    html,
    body,
    #container {
      width: 60vw;
      height: 60vh;
      margin: 2rem auto;
      padding: 0;
    }
    #dataHeader {
        text-align: center !important;
        font-size: 25px !important;
        color: orangered !important;
        font-family: Arial;
        font-weight: 700 !important
    }
  </style>
</head>
<body>
  <p id="dataHeader">ESP8266 Uploaded Data</p>
  <!-- <p id="dataHeader" style="font-size: 17px !important">Temperature | Device name</p> -->
  <div id="container"></div>
  <script>
    let currLength = 0
    const loadDataChart = () => {
        anychart.data.loadJsonFile("../readData.php", function (data) {
        // create a chart and set loaded data
        currLength = data.data.length
        const dataToUse = []
        for (let i=0;i<data.data.length;i++) {
            const { device_name, temperature } = data.data[i]
            dataToUse.push([ device_name, temperature ])
        }
        for (let i=0;i<data.data.length;i++) {
            const { device_name, temperature } = data.data[i]
            dataToUse.push([ device_name, temperature ])
        }
        chart = anychart.line(dataToUse);
        chart.title("Device names and their Temperatures");
        chart.xAxis().title("Device Name");
        chart.yAxis().title("Temperature (°C)");
        chart.tooltip().format(function(e){
        var value = this.value;
            return `Temperature: ${value}°C`;
        });
        chart.container("container");
        chart.draw();
      });
    }

    anychart.onDocumentReady(function () {
      loadDataChart()
    });

    setInterval(() => {
      anychart.onDocumentReady(function () {
        anychart.data.loadJsonFile("../readData.php", function (data) {
            if (data.data.length !== currLength) {
                document.getElementById('container').innerHTML = ''
                currLength = data.data.length
                loadDataChart()
            }
        })
      })
    }, 10000);
  </script>
</body>
</html>