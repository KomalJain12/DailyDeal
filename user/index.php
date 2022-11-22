<!DOCTYPE html>
<?php
include('hhh.php');
?>
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
		<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Buy Rice Products Are Now On Line With Us</h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
			
			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
		</ul>
		<div class="top-brands">
		<div class="container">
		<h2>Latest Products</h2>
		<form id="my_form" action="" method="POST">
		<div style="padding: 20px">
		<select name="order" id="order" onchange="update(this.value)">
		<?php
		if(!isset($_SESSION['order']))
		{
            echo '<option selected disabled>-----ORDER BY-----</option>';
			echo '<option value="1">Price:low to high</option>';
			echo '<option value="2">Price:high to low</option>';
			echo '<option value="3">Latest</option>';
					
		}
		elseif($_SESSION['order']==1)
		{
					
			echo '<option selected disabled>-----ORDER BY-----</option>';
			echo '<option value="1" selected disabled>Price:low to high</option>';
			echo '<option value="2">Price:high to low</option>';
			echo '<option value="3">Latest</option>';
					
		}
		elseif($_SESSION['order']==2)
		{
			
			echo '<option selected disabled>-----ORDER BY-----</option>';
			echo '<option value="1">Price:low to high</option>';
			echo '<option value="2" selected disabled>Price:high to low</option>';
			echo '<option value="3">Latest</option>';
		}
		elseif($_SESSION['order']==3)
		{
			echo '<option selected disabled>-----ORDER BY-----</option>';
			echo '<option value="1">Price:low to high</option>';
			echo '<option value="2">Price:high to low</option>';
			echo '<option value="3" selected disabled>Latest</option>';
		} 
		?>
        </select>
		<input type="submit" name="s1" id="s1" style="visibility: hidden">
		<?php
								if(isset($_SESSION['order']))
								{
									$order=$_SESSION['order'];
								}
								else
								{
									$order=0;
								}
								switch ($order){
									case "1":
										$q=mysqli_query($conn,"select * from product_detail order by rate");
										break;
									case "2":
										$q=mysqli_query($conn,"select * from product_detail order by rate desc");
										break;
									case "3":
										$q=mysqli_query($conn,"select * from product_detail order by pid desc");
										break;	
									default:
										$q=mysqli_query($conn,"select * from product_detail order by pid desc");
								}
				
		?>
		</div>
		</form>
	<script>
	function update()
	{
		var form = document.getElementById("my_form");
		var order=jQuery('#order').val();
		jQuery.ajax({
            url:'order.php',
            type:'post',
            data:'val='+order});
		form.submit();
	}
    </script>
			<!-- <div class="grid grid_5"> -->
				<?php
$x=1;
while($row=mysqli_fetch_array($q))
{
$pid=$row['pid'];
$rev=mysqli_query($conn,"select avg(rating) as avg from review_master where pid=$pid");
$res=mysqli_fetch_assoc($rev);

$q2=mysqli_query($conn,"Select * from product_detail ORDER BY pid;");
$row3=mysqli_num_rows($q2)>0;
if($row3)
{
$r=mysqli_fetch_array($q2);
?>
							
			<div class="agile_top_brands_grids">

								<div class="col-md-4 top_brand_left">
									
										<div class="agile_top_brand_left_grid">
											<div class="hover14 column">
											<!-- <div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div> -->
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="product_detail.php?pid=<?php echo $pid; ?>"><img src="../vendor/images/<?php echo $row['pimage'];?>" height="300" width="300"/></a>
															<center><b><h3><?php echo $row['brand'];?>'s</h3></b></center>		
															<center><b><h4><?php echo $row['pname'];?></h4></b></center>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<?php
															$rev=mysqli_query($conn,"select avg(rating) as avg from review_master where pid=$pid");
															$res=mysqli_fetch_assoc($rev);
															if($res['avg']!=null)
															{
																	echo number_format((float)$res['avg'], 1, '.', '');
																}
																else{
																	echo "(No Ratings)";
																}
																?>
															</div>
															<h4>Price : <b><?php echo $row['rate'];?></b><span>MRP : <b><?php echo $row['mrp'];?></b></span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	
																	<?php echo "<a class='btn btn-primary' href=xyz.php?x=$row[0]>Add to Cart</a>";?></a>
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
		if($x%3==0)
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
</div>


<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.html"> <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.html"> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.html"><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->	
<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="images/p2.jpg" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="images/p3.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="images/p4.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="images/111.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
<!--banner-bottom-->
<!--brands-->

	<div class="brands">
		<div class="container">
		<h3>Brand Store</h3>
			<div class="brands-agile">
						<?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$x=1;
$q="Select * from vendor_master where status=1";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?>
				<div class="col-md-4 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">👨🏻‍💼<?php echo $row['vname']; ?></a></p>
					</div>
				</div>
		<?php
			
		}
}
else
{
	echo "no data";
}
?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				<div class="agile_top_brands_grids">
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/14.png"></a>		
												<p>Fried-gram</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$35.99 <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					
	
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<?php
include('fff.php');
?>