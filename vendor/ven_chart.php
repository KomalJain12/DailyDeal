  <?php
  //user
  $con=mysqli_connect("localhost","root","","dailydeal") or die("");
     $q2="SELECT order_id FROM order_detail where status=1 and vid=$vid ORDER BY order_detail_id";
    $q2_run=mysqli_query($con,$q2);
    $r1=mysqli_num_rows($q2_run);
  //seller
    $q3="SELECT order_id FROM order_detail where status=2 and vid=$vid ORDER BY order_detail_id";
    $q3_run=mysqli_query($con,$q3);
    $r2=mysqli_num_rows($q3_run);
  //product
    $q4="SELECT order_id FROM order_detail where status=3 and vid=$vid ORDER BY order_detail_id";
    $q4_run=mysqli_query($con,$q4);
    $r3=mysqli_num_rows($q4_run);
  //order
    $q5="SELECT order_id FROM order_detail where status=4 and vid=$vid ORDER BY order_detail_id";
    $q5_run=mysqli_query($con,$q5);
    $r4=mysqli_num_rows($q5_run);
  
  ?>
<html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task','Hours per Day'],
          ['Seller',<?php echo $r2; ?>],
          ['Product',<?php echo $r3; ?>],
          ['User',<?php echo $r1; ?>],
          ['order',<?php echo $r4;?>]
        ]);

        var options = {
          title: 'Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="pie" style="width: 900px; height: 500px;"></div>
  </body>
</html>
