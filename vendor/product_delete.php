<html>
<body>
<?php 
include('head.php');
?>

<?php
$pid=$_REQUEST['pid'];
$query = "DELETE FROM product_detail WHERE pid=$pid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
 echo "<script> alert('Product Removed');</script>";
header("Location: product_view.php"); 
?>
<?php 
include('foot.php');
?>
</body>
</html>