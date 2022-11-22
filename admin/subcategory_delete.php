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
$sid=$_REQUEST['sid'];
$query ="DELETE FROM `subcategory_detail` WHERE sid=$sid"; 
$result = mysqli_query($con,$query);
header("Location:subcategory_view.php"); 
?>
<?php 
include('fff.php');
?>
</body>
</html>