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
$order_detail_id=$_GET['order_detail_id'];
$q1=mysqli_query($conn,"select o.*,p.* from order_master o,order_detail p where o.order_id=p.order_id and order_detail_id=$order_detail_id");
$row=mysqli_fetch_array($q1);
$order_id=$row['order_id'];
$email=$row['email'];
$full_name=$row['full_name'];
echo $email;
date_default_timezone_set('Asia/Kolkata');
$ddate=date('Y-m-d');
$q=mysqli_query($conn,"update order_detail set dispatch_date='$ddate',status=3 where order_detail_id=$order_detail_id");

if($q)
{
 mail("$email","Welcome to Daily Deal","Thank you for shopping with Us.
Your Order No: # $order_id has been cancelled due to some error.Your payment will be refunded in your account.
If you have any queries contact us on 
Email: dailydeal325@gmail.com 
PH No: 9081881584 
Keep Shopping With Us :)","Hello $full_name");
 header('location:order_view.php');
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