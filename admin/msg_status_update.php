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
$id=$_GET['id'];
$q1=mysqli_query($conn,"select * from contact_us where id=$id");
$row=mysqli_fetch_array($q1);
$email=$row['email'];
$full_name=$row['name'];
$q=mysqli_query($conn,"update contact_us set status=1 where id=$id");
if($q)
{
	mail("$email","Welcome to Daily Deal","Thank you for contacting  Us.
We've received you request and are working on it. We will contact you as soon as possible
Stay connected with us :)
If you have any queries contact us on 
Email: dailydeal325@gmail.com 
PH No: 9081881584 ","Hello $full_name");
	header('location:contactus.php');
}


?>
<?php 
include('fff.php');
?>
</body>
</html>