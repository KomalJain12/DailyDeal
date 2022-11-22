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
$vid=$_REQUEST['vid'];
$query ="DELETE FROM `vendor_master` WHERE vid=$vid";
$result = mysqli_query($con,$query);
header("Location:vendor_view.php"); 
?>
<?php 
include('fff.php');
?>
</body>
</html>