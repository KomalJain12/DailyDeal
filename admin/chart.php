<?php
  //user
		$con=mysqli_connect("localhost","root","","dailydeal") or die("");
		$q2="SELECT uid FROM user_master ORDER BY uid";
		$q2_run=mysqli_query($con,$q2);
		$row=mysqli_num_rows($q2_run);
  //seller
		$q3="SELECT vid FROM vendor_master ORDER BY vid";
		$q3_run=mysqli_query($con,$q3);
		$row2=mysqli_num_rows($q3_run);
  //product
    $q4="SELECT pid FROM product_detail ORDER BY pid";
    $q4_run=mysqli_query($con,$q4);
    $row3=mysqli_num_rows($q4_run);
  //order
    $q5="SELECT order_id FROM order_detail";
    $q5_run=mysqli_query($con,$q5);
    $row4=mysqli_num_rows($q5_run);
	?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task','Hours per Day'],
          ['Seller',<?php echo $row2; ?>],
          ['Product',<?php echo $row3; ?>],
          ['User',<?php echo $row; ?>],
          ['order',<?php echo $row4;?>]
        ]);

        var options = {
          title: 'Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
