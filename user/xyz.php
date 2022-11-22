<?php
error_reporting(1);
session_start();
$conn = mysqli_connect("localhost","root","","dailydeal");
$pid=$_GET['x'];
$q1=mysqli_query($conn,"select * from product_detail where pid=$pid");
$row=mysqli_fetch_array($q1);
$vid=$row['vid'];

$uid=$_SESSION['uid'];
$date=date('d/m/y');
if(isset($_SESSION['uid']))
{
	$q=mysqli_query($conn,"insert into cart values('',$pid,$uid,$vid,'$date',1)");
	echo "<script> alert('added successfullyy'); window.location.href='index.php';</script>";
}
else
{
	echo "<script> alert('You Have to Login First'); window.location.href='login.php';</script>";
}
?>