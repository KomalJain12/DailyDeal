<?php
 error_reporting(1);
session_start();
$vid=$_SESSION['id'];
include('head.php');
?>
<?php
  //user
    $con=mysqli_connect("localhost","root","","dailydeal") or die("");
    $q2="SELECT order_id FROM order_detail where vid=$vid ORDER BY order_detail_id";
    $q2_run=mysqli_query($con,$q2);
    $row=mysqli_num_rows($q2_run);
  //seller
   /* $q3="SELECT vid FROM vendor_master ORDER BY vid";
    $q3_run=mysqli_query($con,$q3);
    $row2=mysqli_num_rows($q3_run);*/
  //product
    $q4="SELECT pid FROM product_detail where vid=$vid ORDER BY pid";
    $q4_run=mysqli_query($con,$q4);
    $row3=mysqli_num_rows($q4_run);
  //order
  
  ?>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task','Hours per Day'],
         
          ['Product',<?php echo $row3; ?>],
          ['Order',<?php echo $row; ?>],
          
        ]);

        var options = {
          title: 'Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
   
   
  <style type="text/css">
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  </style>
 
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
       <span><i class="fa fa-code-fork"></i></span>
        <span class="count-numbers">
          <?php
          $q=mysqli_query($con,"select * from product_detail where vid=$vid");
          $cnt=mysqli_num_rows($q);
          echo $cnt;
          ?> </span>
        <a href="product_view.php"><span class="count-name"><h4 style="color: #ffffff;">Products</h4></span></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">
          <?php
        $q=mysqli_query($con,"select * from order_detail where vid=$vid");
        $cnt=mysqli_num_rows($q);
        echo $cnt;
        ?> 
        </span>
        <span class="count-name">Orders</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">₹
          <?php
          /*$order_detail_id=$_GET['order_detail_id'];*/

          $q="select SUM(ROUND(total_price)) AS sum from order_detail where status=4 and vid=$vid";
          $r=mysqli_query($con,$q);
          while($row=mysqli_fetch_array($r))
          {
           echo $row['sum'];
          ?>
                                            
        </span>
        <span class="count-name">Earning</span>
      <?php } ?>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">
          <?php
          $curdate=date('Y-m-d h:i:s');
          $q=mysqli_query($con,"select p.*,o.* from offer o, product_detail p where p.pid=o.pid and exdate<'$curdate'");
          $cnt=mysqli_num_rows($q);
          echo $cnt;
          ?>
        </span>
        <span class="count-name">Offers</span>
      </div>
    </div>



  </div>
</div>
<div class="form">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
  
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </div>
</div>
</div>

<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
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
    $q4="SELECT order_id FROM order_detail where status=4 and vid=$vid ORDER BY order_detail_id";
    $q4_run=mysqli_query($con,$q4);
    $r3=mysqli_num_rows($q4_run);
  //order
    $q5="SELECT order_detail_id FROM order_detail where status=0 and vid=$vid ORDER BY order_detail_id";
    $q5_run=mysqli_query($con,$q5);
    $r4=mysqli_num_rows($q5_run);
  
  ?>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task','Hours per Day'],
          ['Dispatched',<?php echo $r2; ?>],
          ['Delivered',<?php echo $r3; ?>],
          ['Approved',<?php echo $r1; ?>],
          ['Returned',<?php echo $r4;?>]
        ]);

        var options = {
          title: 'Orders Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie'));

        chart.draw(data, options);
      }
    </script>
    <div id="pie" style="width: 900px; height: 500px;"></div>
  </div>
</div>
</div>
</div>
</div>
  
<?php
include('foot.php');
?>


