<!DOCTYPE html>
<html>
<body>
<?php
include('hhh.php');
?>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form  method="post">
					<input type="text" name="txt_aname" placeholder="Enter Your Name" required=" " >
				<!--<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>-->
					<br>
					<input type="email" name="txt_email" placeholder="Email Address" required=" " >
					<br>
					<input type="text" name="txt_mob" placeholder="Contact No" required=" " >
					<input type="password" name="pass" placeholder="Password" required=" " >
					<input type="password" name="cpass" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" name="btnreg" value="Register">
				</form>
			</div>
			<div class="register-home">
				<a href="home.php">Home</a>
			</div>
		</div>
	</div>
	<?php
$con=mysqli_connect("localhost","root","","dailydeal");

if(isset($_POST['btnreg']))
  {
    $name=$_POST['txt_aname'];
    $mobileno=$_POST['txt_mob'];
    $email=$_POST['txt_email'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $otp =rand(999,9999);
  if($password==$cpassword)
    $q=mysqli_query($con,"insert into user_master values(0,'','$name','$mobileno','$email','$password','$otp')");
  if($q)
    {
      mail("$email","hiii","$otp");
      header('location:login.php');


    }
  else
    {
      echo "<script> alert('Password Donot Match...');</script>";
    }
  }
?>
<?php
include('fff.php');
?>
</body>
</html>