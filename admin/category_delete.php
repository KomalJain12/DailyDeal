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
$cid=$_REQUEST['cid'];
$query ="DELETE FROM `category_master` WHERE cid=$cid"; 
$result = mysqli_query($con,$query);
header("Location:category_view.php"); 
?>
<?php 
include('fff.php');
?>
</body>
</html>