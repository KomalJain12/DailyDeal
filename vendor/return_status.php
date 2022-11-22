<html>
<body>
<?php 
include('head.php');
?>
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$status = "";
$rid=$_GET['return_id'];
$q=mysqli_query($conn,"update order_return_master set status=1 where return_id=$rid");

if($q)
{
 header('location:return_view.php');
}
else
{
	echo "<script> alert('error');</script>";
}
?>
<?php 
include('foot.php');
?>
</body>
</html>