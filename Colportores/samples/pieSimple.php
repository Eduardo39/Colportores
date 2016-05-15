<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/pie.js" type="text/javascript"></script>

        <script>
            var chart;
            var legend;

<?php 
        include('./..conexion.php');
        
 ?>
            var chartData = [{
                country: "Czech Republic",
                litres: 301.90
            }, {
                country: "Ireland",
                litres: 201.10
            }, {
                country: "Germany",
                litres: 165.80
            }, {
                country: "Australia",
                litres: 139.90
            }, {
                country: "Austria",
                litres: 128.30
            }, {
                country: "UK",
                litres: 99.00
            }, {
                country: "Belgium",
                litres: 60.00
            }];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>

    <body>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
    </body>

</html>