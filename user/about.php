<!DOCTYPE html>
<html>
<body>
	<?php
	include('hhh.php');
	?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">About</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3_agile_header">About Us</h3>
			<div class="about-agileinfo w3layouts">
				
				<div class="col-md-8 about-wthree-grids grid-top">
					<?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from aboutus where ID=1;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?>
					<h4><?php echo $row['Title'];?></h4>
					<br><br><br>
					<p class="top"><?php echo $row['Description'];?></p>
					<br><br><br><br><br><br>	
					<div class="about-w3agilerow">
						<div class="col-md-4 about-w3imgs">
							<img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php
        }
}
else
{
	echo "no data";
}
?>
				</div>
				<div class="col-md-4 about-wthree-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>Deals We Have..</h4>
						</div>
						<div class="time-bottom">
							<h5>Types Of Grabbing Deals</h5>
							<h5>Coupon Codes</h5>
							<p>Vouchers,Discount Codes,Offers,etc..</p>
						</div>
					</div>
					<div class="testi">
						<h3 class="w3_agile_header">Customer Feedback</h3>
						<!--//End-slider-script -->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
										<ul class="rslides" id="slider5"><?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from feedback;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?>
				
								<li>
									<div class="testi-slider">
										<h4><?php echo $row['comment'];?></h4>
										<p><?php echo $row['description'];?></p>
										<div class="testi-subscript">
											<p><a href="#"><?php echo $row['name'];?></a>..<?php echo $row['city'];?></p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
													<?php
        }
}
else
{
	echo "no data";
}
?>	
							</ul>
		
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-slid -->
	<div class="about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<?php
$q="Select * from aboutus where ID=2;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?>
				<h2><?php echo $row['Title'];?></h2>
				<p><?php echo $row['Description'];?></p>
			<?php
        }
}
else
{
	echo "no data";
}
?>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<!-- about-team -->
	<div class="about-team"> 
		<div class="container">
			<h3 class="w3_agile_header">Meet Our Team</h3>
			<div class="team-agileitsinfo">
				<div class="col-md-3 about-team-grids">
					<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from admin_master where aid=1;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
    while($row = mysqli_fetch_array($result)) 
        {
            ?>
					<img src="../admin/adminpic/<?php echo $row['adpic'];?>" height="250" alt=""/>
					<div class="team-w3lstext">
						<h4><span><?php echo $row['aname'];?>,</span> Admin </h4>
						<p>Meet our Admin that brings best deals and offers to you and manages Daily Deal</p>
						<p>Email: <?php echo $row['email'];?></p>
						<p>Contact No: (+91)<?php echo $row['mobileno'];?></p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
<?php
        }
}
else
{
	echo "no data";
}
?>
				</div>
				<div class="col-md-3 about-team-grids">
					<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from admin_master where aid=2;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
    while($row = mysqli_fetch_array($result)) 
        {
            ?>
					<img src="../admin/adminpic/<?php echo $row['adpic'];?>" height="250" alt=""/>
					<div class="team-w3lstext">
						<h4><span><?php echo $row['aname'];?>,</span> Director</h4>
						<p>Meet our Admin that brings best deals and offers to you and manages Daily Deal</p>
						<p>Email: <?php echo $row['email'];?></p>
						<p>Contact No: (+91)<?php echo $row['mobileno'];?></p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
<?php
        }
}
else
{
	echo "no data";
}
?>
</div>
				<div class="col-md-3 about-team-grids">
					<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from admin_master where aid=3;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
    while($row = mysqli_fetch_array($result)) 
        {
            ?>
					<img src="../admin/adminpic/<?php echo $row['adpic'];?>" height="250" alt=""/>
					<div class="team-w3lstext">
						<h4><span><?php echo $row['aname'];?>,</span> Manager </h4>
						<p>Meet our Admin that brings best deals and offers to you and manages Daily Deal</p>
						<p>Email: <?php echo $row['email'];?></p>
						<p>Contact No: (+91)<?php echo $row['mobileno'];?></p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
<?php
        }
}
else
{
	echo "no data";
}
?>
</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
	<?php
	include('fff.php');
	?>
</body>
</html>