<html>
<body>
	
<?php
include('hhh.php');
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Forgot Password</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Forgot Password</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="email" name="email" placeholder="Enter Your Registered Email" required=" " >
					<input type="submit" name="forpas" value="submit">
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="register.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	  <?php
	   
        $con=mysqli_connect("localhost","root","","dailydeal");
    /*   session_start();*/
        if(isset($_POST['forpas']))
        {
            $email=$_POST['email'];
           /* $uid=$_SESSION['uid'];*/
            $q=mysqli_query($con,"select * from admin_master where email='$email'");
            $row=mysqli_fetch_array($q);
           /* echo $uid;*/
           $password=$row['password'];
           $full_name=$row['aname'];
            if($q)
            {
                  mail("$email","Welcome to Daily Deal","Your Password is $password,Please do not share with anyone.
If you have any queries contact us on 
Email: dailydeal325@gmail.com 
PH No: 9081881584 
Keep Shopping With Us :)","Hello $full_name");
                 header("location:login.php");

            }
            else
            {
                 header("location:forgot_pass.php");
                echo "<script> alert('Unregistered User');</script>";
            }   
        }
    ?>
<?php
include('fff.php');
?>
</body>
</html>