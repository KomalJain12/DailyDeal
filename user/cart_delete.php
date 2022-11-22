<html>
<body>
<?php 
include('hhh.php');
?>
 <?php
//error_reporting(1);
$con=mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$cartid=$_REQUEST['cartid'];
$query ="DELETE FROM `cart` WHERE cartid=$cartid"; 
$result = mysqli_query($con,$query);
header("Location:checkout.php"); 
?>
<?php 
include('fff.php');
?>
</body>
</html>
