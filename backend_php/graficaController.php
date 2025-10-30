<?php
 include "backend_php\conexion.php";
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          <?php
                $sql = "SELECT * FROM `inventario`";
                $consulta = mysqli_query($conexion, $sql);
                while ($resultado = mysqli_fetch_assoc($consulta)) {
                    echo "['".$resultado['idBolso']."',".$resultado['cantidad']."],";
                }
          ?>
        ]);
        var options = {
        title: 'Porcentaje de ocupación del almacén por los productos',
        titleTextStyle: { fontSize: 24 }
        };

var chart = new google.visualization.PieChart(document.getElementById('piechart'));

chart.draw(data, options);
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

  </body>
</html>
