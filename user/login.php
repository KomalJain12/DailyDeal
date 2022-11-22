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
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="email" name="txt_email" placeholder="Email Address" required=" " >
					<input type="password" name="pass" placeholder="Password" required=" " >
					<div class="forgot">
						<a href="forgot_pass.php">Forgot Password?</a>
					</div>
					<input type="submit" name="btnlog" value="Login">
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="register.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	  <?php
        $con=mysqli_connect("localhost","root","","dailydeal");
       
        if(isset($_POST['btnlog']))
        {

            $email=$_POST['txt_email'];
            $password=$_POST['pass'];
            $q=mysqli_query($con,"select * from user_master where email='$email' and password='$password'");
            $cnt=mysqli_num_rows($q);
            $row=mysqli_fetch_array($q);
            $status=$row['status'];
            $_SESSION['uid']=$row['uid'];
        if($cnt>0)
            {
            	if ($status==1)
            	 {
            		header("location:index.php");
            		
            	 }
            	else
		            {
		            	//echo "<script> alert('Unauthorized User..please check your mail and verify OTP');</script>";
		            	header("location:otp.php");
		                
		            } 

            	//echo "<script> alert('welcome');</script>"; 
               // $_SESSION['uid']=$row[0];
                 
                               
            }
            else
            {
            	echo "<script> alert('Unauthorized User..please check your mail and verify OTP');</script>";
            	//header("location:otp.php");
                
            }   
        }
    ?>
<?php
include('fff.php');
?>
</body>
</html>