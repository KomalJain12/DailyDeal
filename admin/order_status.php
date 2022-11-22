<html>
<body>
<?php 
include('hhh.php');
?>
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$status = "";
$order_id=$_GET['order_id'];
$q1=mysqli_query($conn,"select * from order_master where order_id=$order_id");
$row=mysqli_fetch_array($q1);
$email=$row['email'];
$full_name=$row['full_name'];
echo $email;
$q=mysqli_query($conn,"update order_master set order_status=1 where order_id=$order_id");

if($q)
{
 mail("$email","Welcome to Daily Deal","Thank you for shopping with Us.
Your Order No: # $order_id has been processed and will arrive to you shortly.Please keep your payment ready if selected cod.
If you have any queries contact us on 
Email: dailydeal325@gmail.com 
PH No: 9081881584 
Keep Shopping With Us :)","Hello $full_name");
 header('location:order_detail.php');
}
else
{
	echo "<script> alert('error');</script>";
}

?>
<?php 
include('fff.php');
?>
</body>
</html>