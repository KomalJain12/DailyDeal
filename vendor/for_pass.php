<html>
<body>
	
<?php
include('head.php');
?>
<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email to receive instructions
											</p>

											<form method="POST" enctype="multipart/form-data">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" name="for" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div>
	  <?php
	   
        $con=mysqli_connect("localhost","root","","dailydeal");
    /*   session_start();*/
        if(isset($_POST['for']))
        {
            $email=$_POST['email'];
           /* $uid=$_SESSION['uid'];*/
            $q=mysqli_query($con,"select * from vendor_master where email='$email'");
            $row=mysqli_fetch_array($q);
           /* echo $uid;*/
           $password=$row['password'];
           $vname=$row['vname'];
            if($q)
            {
                  mail("$email","Welcome to Daily Deal","Your Password is $password,Please do not share with anyone.
If you have any queries contact us on 
Email: dailydeal325@gmail.com 
PH No: 9081881584 
Welcome.
Keep Shopping With Us :)","Hello $vname");
                 header("location:login.php");

            }
            else
            {
                 header("location:for_pass.php");
                echo "<script> alert('Unregistered User');</script>";
            }   
        }
    ?>
<?php
include('foot.php');
?>
</body>
</html>