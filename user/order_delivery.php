<html>
<body>
<?php
include('hhh.php');
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Enter OTP</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Enter OTP</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="text" name="otp" placeholder="Enter Your OTP To Proceed.." required=" " >
					<input type="submit" name="btndel" value="submit">
				</form>
			</div>
		</div>
	</div>
	  <?php
	   
        $con=mysqli_connect("localhost","root","","dailydeal");
        if(isset($_POST['btndel']))
        {
            $otp=$_POST['otp'];
            $order_detail_id=$_GET['order_detail_id'];
            date_default_timezone_set('Asia/Kolkata');
            $delivery_date=date('Y-m-d');
            $q=mysqli_query($con,"select * from order_detail where order_otp=$otp and  order_detail_id=$order_detail_id ");
            $cnt=mysqli_num_rows($q);
            if($cnt>0)
            {
                 mysqli_query($con,"update order_detail set status=4,delivery_date='$delivery_date' where order_detail_id=$order_detail_id");
                 header("location:order_history_user.php");

            }
            else
            {
                echo "<script> alert('Otp not match');</script>";
            }   
        }
    ?>
<?php
include('fff.php');
?>
</body>
</html>