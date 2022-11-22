<html>
<body>
	<?php
	session_start();
	?>
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
					<input type="submit" name="btnlog" value="submit">
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="register.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	  <?php
	   
        $con=mysqli_connect("localhost","root","","dailydeal");
       session_start();
        if(isset($_POST['btnlog']))
        {
            $otp=$_POST['otp'];
            $uid=$_SESSION['uid'];
            $q=mysqli_query($con,"select * from user_master where otp=$otp and uid=$uid ");
            $cnt=mysqli_num_rows($q);
            echo $uid;
            if($cnt>0)
            {
                 mysqli_query($con,"update user_master set status=1 where uid=$uid");
                 header("location:index.php");

            }
            else
            {
                 header("location:otp.php");
                echo "<script> alert('Otp not match');</script>";
            }   
        }
    ?>
<?php
include('fff.php');
?>
</body>
</html>