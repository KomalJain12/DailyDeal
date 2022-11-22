
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.dropdown-menu:li {
    text-align: left;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; 
 }

	</style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<form method="post">
				<!-- <div class="collapse navbar-collapse" id="bs-megadropdown-tabs"> -->
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="act">Home</a></li>	
						<!-- Mega Menu -->
						
						<?php
						$conn = mysqli_connect("localhost","root","","dailydeal");
										$q=mysqli_query($conn,"select * from category_master");
										while($row=mysqli_fetch_array($q))
										{
									?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo strtoupper($row['cname']); ?><b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<!-- div class="row">
												<div class="multi-gd-img"> -->
													<ul class="multi-column-dropdown">
														<h6>All <?php echo $row['cname']; ?></h6>
														<?php
														$conn = mysqli_connect("localhost","root","","dailydeal");
															$q2=mysqli_query($conn,"select * from subcategory_detail where cid=".$row['cid']);
															while($row2=mysqli_fetch_array($q2))
															{
														?>
														<li><a href="subcategory.php?sid=<?php echo $row2['sid']; ?>"><pre><b><?php echo strtoupper($row2['sname']); ?></b></pre></a></li>
														<?php
														}
														?>
													</ul>
												<!-- </div>	
											</div> -->
										</ul>

									</li>
									<?php
									}
									?>
								
									
								</ul>
							</form>
							</div>
							</nav>
	</body>
</html>