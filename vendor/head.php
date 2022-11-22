
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Vendor Portal - Vendor Panel</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="home.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Daily Deal
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">
											<?php
												$con=mysqli_connect("localhost","root","","dailydeal");
												session_start();
                                            	$vid=$_SESSION['id'];
                                                $q=mysqli_query($con,"select * from order_detail where vid=$vid and status=0");
                                                $cnt=mysqli_num_rows($q);

                                                $w=mysqli_query($con,"select * from order_return_master where status=0 and pid in (select pid from product_detail where vid=$vid) order by return_id DESC");
                                                $c=mysqli_num_rows($w);
                                                echo $cnt+$c;
                                            ?></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														
														<b><?php echo $cnt; ?></b>&nbsp;&nbsp;<a href="order_check.php"> Orders Received</a>
													</span>
												
												</div>
											</a>
										</li>
									</ul>

									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														
														<b><?php echo $c; ?></b>&nbsp;&nbsp;<a href="order_check.php"> Return Received</a>
													</span>
												
												</div>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						
						<?php
						session_start();
                        $vid=$_SESSION['id'];
						$con=mysqli_connect("localhost","root","","dailydeal");
                            
											$q=mysqli_query($con,"select * from vendor_master where vid=$vid");
											$row=mysqli_fetch_array($q);
											$x=$row['image'];
											
                            ?>
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="venpic/<?php  echo $x;?>">
								<span class="user-info">
									<small>Welcome,
									<?php
											echo $row['vname'];
										?>
									</small>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="vprofile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="Logout.php" onclick='return logout ()'>
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
								<script>
function logout()
{
    return confirm('Are You Sure You Want To LogOut?');
}
</script>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list">
					<li class="">
						<a href="home.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul>

			<ul class="nav nav-list">
				<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-th-list"></i>
							<span class="menu-text">
								Listings
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
								<li class="">
								<a href="product_view.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									View Listings
								</a>
								</li>
								<li class="">
								<a href="p.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Listings
								</a>
								<b class="arrow"></b>
								</li>
								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Track Approval Requests
								</a>
								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="buttons.html">
									<i class="menu-icon fa fa-caret-right"></i>
									My Audits
								</a>

								<b class="arrow"></b>
								</li>
							</ul>
						</li>
					</ul>

					
					<ul class="nav nav-list">
				<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							<span class="menu-text">
								Offers
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
								<li class="">
								<a href="offer.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Offers
								</a>
								</li>
								<li class="">
								<a href="vendor_offer_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									View Offers
								</a>
								<b class="arrow"></b>
								</li>
								
							</ul>
						</li>
					</ul>

					<ul class="nav nav-list">
				<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bars"></i>
							<span class="menu-text">
								Orders
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
								<li class="">
								<a href="order_view.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									View Orders
								</a>
								</li>
								<li class="">
								<a href="return_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Returns
								</a>
								<b class="arrow"></b>
								</li>
								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Cancellation
								</a>
								<b class="arrow"></b>
								</li>
							</ul>
						</li>
					</ul>


					<ul class="nav nav-list">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-squar"></i>
							<span class="menu-text">
								Payments
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
								<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Payment Overview 
								</a>
							
								</li>

								<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Previous Payment
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Transection
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Invoices
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Statements
								</a>

								<b class="arrow"></b>
								</li>
							</ul>
						</li>
					</ul>

					<ul class="nav nav-list">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-circle"></i>
							<span class="menu-text">
								Growth
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
								<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Performance Overview
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Search Traffic Report
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Returns
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Cancellation
								</a>

								<b class="arrow"></b>
								</li>
								<br>
								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Advertising 
								</a>

								<b class="arrow"></b>
								</li>

								<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Promotions
								</a>

								<b class="arrow"></b>
								</li>

							</ul>
						</li>
					</ul>


				<ul class="nav nav-list">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> More </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="profile.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Partner Services
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="inbox.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Account Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="pricing.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Accounting
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="invoice.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Advertise
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="timeline.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Seller Training
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="search.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Warehousing
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>

				<ul class="nav nav-list">
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">4</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Contact Us
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									About Us
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="grid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Contact Seller Support
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>
			</ul>
				<!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

							<!--<li>
								<a href="#">Other Pages</a>
							</li>
							<li class="active">Blank Page</li>-->
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

</body>
</html>