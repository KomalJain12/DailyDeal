<?php
include('hhh.php');
?>
<div class="navbar-buttons navbar-header fixed-top pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<span class="user-info"><h3><i class="fa fa-bars" aria-hidden="true"></i></h3></span>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="future_offer.php">
										<!-- <i class="ace-icon fa fa-cog"></i> -->
										</h4>Upcoming Offers</h4>
									</a>
								</li>
								<li>
									<a href="view_offer.php">
										<!-- <i class="ace-icon fa fa-cog"></i> -->
										</h4>Today Offers</h4>
									</a>
								</li>
							</ul>
						</li>
					
				</div>
<div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				<!-- <div class="agile_top_brands_grids"> -->
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php

$x=1;
$curdate=date('Y-m-d');
$timee=time('h:i:s');
$q="select p.*,o.* from offer o, product_detail p where p.pid=o.pid and exdate>'$curdate'";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?>
					<div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
																
															<div class="embed-responsive embed-responsive-4by3"><a href="#"><img title=" " alt=" " class="card-img-top embed-responsive-item" style="@media (min-width: 992px) {.card-img-top {height: 1vw; object-fit: cover;}}" src="../vendor/images/<?php echo $row['pimage'];?>" /></a></div>	
															<p><?php echo $row['pname'];?></p>
															
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Price : <b><?php echo $row['rate'];?></b><span>MRP : <b><?php echo $row['mrp'];?></b></span></h4>
															<h3 style="font-size: 4mm;">Flat <b><?php echo $row['offer'];?></b> % Discount</h3>
															<h4>Deal of the day <b><?php echo $row['exdate'];?><br>Time:<?php echo $row['time']; ?></b></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	
																	<a class='btn btn-primary' href="">Add to Cart</a>
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
											

										
	
		</div>
	</div>
	</div>
	<?php
		if($x%4==0)
		{
		?>
		<div class="clearfix"> </div>
		<?php
	
	}
?>
</div>
<?php
$x++;
}
}
?>
</div>
<div class="clearfix"> </div>
</div>
</div>
<?php
include('fff.php');
?>