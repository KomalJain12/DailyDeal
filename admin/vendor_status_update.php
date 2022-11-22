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
$vid=$_GET['vid'];
$q1=mysqli_query($conn,"select * from vendor_master where vid=$vid");
$row=mysqli_fetch_array($q1);
$email=$row['email'];
$vname=$row['vname'];
$q=mysqli_query($conn,"update vendor_master set status=1 where vid=$vid");
if($q)
	{
 mail("$email","Welcome to Daily Deal","Congratulations your vendor request has been approved.
You can now login with your USERNAME and PASSWORD.
If you have any queries contact us.
Thank you.
Email: dailydeal325@gmail.com
PH No: 9081881584
Keep Shopping With Us :)","Hello $vname");
header('location:vendor_view.php');
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