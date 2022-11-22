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
$cid=$_REQUEST['id'];
$query ="DELETE FROM `contact_us` WHERE id=$cid"; 
$result = mysqli_query($con,$query);
header("Location:contactus.php"); 
?>
<?php 
include('fff.php');
?>
</body>
</html>