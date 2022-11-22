<?php
$cartid=$_GET['m'];
$conn = mysqli_connect("localhost","root","","dailydeal");
$q =mysqli_query($conn,"select * from cart where cartid=$cartid");
$result=mysqli_fetch_array($q);
$qty=$result['qty'];
$qty=$qty+1;

$q1=mysqli_query($conn,"update cart set qty=$qty where cartid=$cartid");
echo "<script>window.location.href='checkout.php';</script>";
?>