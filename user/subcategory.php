<?php
include('hhh.php');
$sid=$_GET['sid'];
$subcate=mysqli_query($conn,"select * from subcategory_detail where sid=".$sid);
$subcaterow=mysqli_fetch_array($subcate);
?>
<!-- main-slider -->
<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Buy All Kinds Of Products Here</h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Whole Lots Products Are Now On Line With Us</h3>
				</div>
			</li>
			
			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Easy Buy Aything</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2><?php echo $subcaterow['sname'];?>'s</h2>
			<div class="grid grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
							<?php
								$q=mysqli_query($conn,"select * from product_detail where sid=".$sid);
                                $pres=mysqli_num_rows($q);
                                if($pres>0)
                                {
								$x=1;
								while($row=mysqli_fetch_array($q))
								{
									$pid=$row['pid'];
									$r=mysqli_query($conn,"select avg(rating) as avg from product_detail where pid=$pid");
									$rres=mysqli_fetch_assoc($r);
									
								?>
							<div class="agile_top_brands_grids">
								
								<div class="col-md-4 top_brand_left">
										<div class="agile_top_brand_left_grid">
									<div class="hover14 column">
											
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<?php echo "<a href=product_detail.php?x=$row[0]>";?><img src="../vendor/images/<?php echo $row['pimage'];?>" height="250" width="250"/></a>		
															<p><?php echo $row['pname'];?></p>
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
                        
                        else{
                            echo '<div align=center><h4 style="padding: 50px;"> SORRY NO "'.strtoupper($subcaterow['sname']).'" AVAILABLE AT THIS TIME.</div>';
                        }
							?>
							
							
						</div>
						
					</div>
				</div>
			</div>
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
         <a href="beverages.php"> <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.php"> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.php"><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
          
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
		
<!--//brands-->
<!-- new -->
	
<?php
    include('fff.php');
?>