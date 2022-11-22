<!DOCTYPE html>
<html>
<head>
<title>Daily Deal-Deals Of The Day</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>	
<body>
	
<br><br><br>
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><h4><b>
						<?php
						error_reporting(1);
						     $con=mysqli_connect("localhost","root","","dailydeal");
								session_start();
								$uid=$_SESSION['uid'];
								$q=mysqli_query($con,"select * from user_master where uid=$uid");
								$row=mysqli_fetch_array($q);
								echo "Welcome,  ".$row['name'];
							?>
					</b></h4></li><br>
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 6353502268</li>
				</ul>	
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Daily Deal</a></h1>
			</div>
			<br>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>NEW DAY NEW DEALS AND OFFERS UPTO 70% OFF... <a href="view_offer.php">GRAB IT...</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="order_history_user.php">Your Orders</a></li>
					<li><a href="register.php">Create Account</a></li>
					<li><a href="login.php">Login</a></li>
					<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<form method="POST" class="last">
									<b><i class="fa fa-bars" aria-hidden="true"></i></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<ul class="multi-column-dropdown">
												<h6>More</h6>
												<li><a href="logout.php">LogOut</a></li>
												<li><a href="../vendor/index.php">Become A vendor</a></li>
												<li><a href="../admin/index.php">Admin Login</a></li>
											</ul>
										</ul>
									</form>
						</li>
				</ul>
			</div>
			<div class="product_list_header"> 
					<!-- <form action="#" method="post" class="last"> -->
					<a href="checkout.php"><span><h3 style="font-size: 5mm"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></h3></span></a>
					</form>  
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php 
	include('menu.php');
	?>
</body>
</html>