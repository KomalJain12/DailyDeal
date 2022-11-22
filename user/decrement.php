<?php
$cartid=$_GET['m'];

$conn = mysqli_connect("localhost","root","","dailydeal");
$q =mysqli_query($conn,"select * from cart where cartid=$cartid");
$result=mysqli_fetch_array($q);
$qty=$result['qty'];
if($qty>1)
{
    $qty--;
   $q1=mysqli_query($conn,"update cart set qty=$qty where cartid=$cartid");
echo "<script>window.location.href='checkout.php';</script>";
}
else
{
    echo '<script>alert("reached minimum quantity if you want to remove then click the remove button");</script>';
    echo "<script>window.location.href='checkout.php';</script>";
}

?>