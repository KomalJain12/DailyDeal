<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 11:29:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Daily Deal-- Admin Dashboard</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">
    
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="home.php"><img class=" img-80 blur-up lazyloaded" src="adminpic/logoo.jpg" alt=""></a></div>
        </div>
        <div class="main-header-right ">
            <div class="mobile-sidebar">
                <div class="media-body text-end switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>

                    <li class="onhover-dropdown"><a class="txt-dark" href="javascript:void(0)">
                        <h6>EN</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="javascript:void(0)" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="javascript:void(0)" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="javascript:void(0)" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="javascript:void(0)" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>

                    <li class="onhover-dropdown">
                        <!-- <i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span> -->
                            <?php
                                             $con=mysqli_connect("localhost","root","","dailydeal");
                                             $q=mysqli_query($con,"select * from contact_us where status=0");
                                                $cnt=mysqli_num_rows($q);

                                                $q=mysqli_query($con,"select * from order_detail where status=0");
                                                $c=mysqli_num_rows($q);

                                                $q=mysqli_query($con,"select * from vendor_master where status=0");
                                                $t=mysqli_num_rows($q);

                                                $tot=$cnt+$t+$c;
                                                ?>
                                                <i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge"><?php echo $tot; ?></span>
                                            
                        <span class="dot"></span>
                        <ul class="notification-dropdown custom-scrollbar onhover-show-div p-0">
                            <li class="bg-light txt-dark"><a href="javascript:void(0)" data-original-title="" title="">All </a> notification</li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-info me-3"><a href="contactus_check.php"><i data-feather="message-circle"></i></a></div>
                                    <div class="media-body">
                                        <h6 class="font-info">
                                            <?php
                                             $con=mysqli_connect("localhost","root","","dailydeal");
                                                $q=mysqli_query($con,"select * from contact_us where status=0");
                                                $cnt=mysqli_num_rows($q);
                                                echo $cnt;
                                            ?>
                                        </b><a href="contactus_check.php"> New Message Recieve</a></h6>
                                        
                                    </div>
                                </div>
                            </li>
                           
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success bg-warning me-3">
                                        <a href="vendor_check.php"><i data-feather="gift"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">
                                            <?php
                                             $con=mysqli_connect("localhost","root","","dailydeal");
                                                $q=mysqli_query($con,"select * from vendor_master where status=0");
                                                $t=mysqli_num_rows($q);
                                                echo $t;
                                            ?>
                                        </b><a href="vendor_check.php"> New Vendor Request Recieve </a></h6>
                                        
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success bg-warning me-3">
                                        <a href="admin_check_order.php"><i data-feather="gift"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">
                                            <?php
                                             $con=mysqli_connect("localhost","root","","dailydeal");
                                                $q=mysqli_query($con,"select * from order_detail where status=0");
                                                $c=mysqli_num_rows($q);
                                                echo $c;
                                            ?>
                                        </b><a href="admin_check_order.php"> New Order Recieve </a></h6>
                                       
                                    </div>
                                </div>
                            </li>
                            

                            
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                             <?php
                            $con=mysqli_connect("localhost","root","","dailydeal");
                            ?>
                            <?php
                                            session_start();
                                            $aid=$_SESSION['id'];
                                            $q=mysqli_query($con,"select * from admin_master where aid=$aid");
                                            $row=mysqli_fetch_array($q);
                                            $x=$row['adpic'];
                                            
                            ?>
                            <img class="align-self-center pull-right img-80 rounded-circle blur-up lazyloaded" src="adminpic/<?php  echo $x;?>" alt="header-user">
                        </div>
                         
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="profile.php">Profile<span class="pull-right"><i data-feather="user"></i></span></a></li>
                            <li><a href="contactus.php">Inbox<span class="pull-right"><i data-feather="mail"></i></span></a></li>
                            <li><a href="javascript:void(0)">Taskboard<span class="pull-right"><i data-feather="file-text"></i></span></a></li>
                            <li><a href="javascript:void(0)">Settings<span class="pull-right"><i data-feather="settings"></i></span></a></li>
                            <li><a href="logout.php" onclick='return logout ()'>Logout<span class="pull-right"><i data-feather="log-out"></i></span></a></li>
                      
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-80 rounded-circle lazyloaded blur-up" src="adminpic/<?php  echo $x;?>"  alt="#">
                    </div>
                    <h6 class="mt-3 f-14"> <?php
                                            echo $row['aname'];
                                        ?></h6>
                    <p>Admin Panel</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="home.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i> <span>Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                                    <li><a href="category.php"><i class="fa fa-circle"></i>Add Category</a></li>
                                    <li><a href="category_view.php"><i class="fa fa-circle"></i>View Category</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i> <span>Sub Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                                    <li><a href="subcategory.php"><i class="fa fa-circle"></i>Add Subcategory</a></li>
                                    <li><a href="subcategory_view.php"><i class="fa fa-circle"></i>View Subcategory</a></li>
                        </ul>

                         <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="vendor_view.php"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="product_list.php"><i class="fa fa-circle"></i>Product List</a></li>
                        </ul>
                    </li>

                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="admin_view_order.php"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                   <!--  <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li> -->
                   <!--  <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                        </ul>
                    </li> -->
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user_view.php"><i class="fa fa-circle"></i>User List</a></li>
                        </ul>
                    </li>
                   
                    
                    <!-- <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li> -->
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.php"><i class="fa fa-circle"></i>Profile</a></li>
                            <li><a href="aboutus.php"><i class="fa fa-circle"></i>About Us</a></li>
                            <li><a href="contactus.php"><i class="fa fa-circle"></i>Contact Us</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li> -->
                    <li><a class="sidebar-header" href="index.php"><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar custom-scrollbar" id="right_side_bar">
            <div>
                <div class="container">
                    <!-- <div class="modal-header p-l-20 p-r-20"> -->
                        <div class="col-sm- p-0">
                            
                            <center><h6 class="modal-title font-weight-bold"><b> VENDOR LIST</b></h6></center>
                        </div>
                        <!-- <div class="col-sm-4 text-end p-0"><i class="me-2" data-feather="settings"></i></div> -->
                    <!-- </div> -->
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search vendor"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from vendor_master ORDER BY vid";
$result = mysqli_query($conn,$q);
while($row = mysqli_fetch_array($result)) 
{
?>
                         <li class="clearfix"><?php echo "<a href=vendor_detail.php?x=$row[0]>";?><img class="rounded-circle user-image" src='../vendor/venpic/<?php echo $row['image']; ?>' alt=""></a> 
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name"><?php echo $row['vname']; ?></div>
                                        <!-- <div class="status"> 28 minutes ago</div> -->
                                    </div>
                                </li>
                                <?php 
 } 
 ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <!--<div class="page-header">
                    <div class="row">
                        
                    </div>
                </div>-->
            
        </div>
         <script>
function logout()
{
    return confirm('are you sure you want to logout?');
}
</script>
            
<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="../assets/js/chart/chartist/chartist.js"></script>


<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="../assets/js/prism/prism.min.js"></script>
<script src="../assets/js/clipboard/clipboard.min.js"></script>
<script src="../assets/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!--map js-->
<script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>

<!--apex chart js-->
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/chart/apex-chart/stock-prices.js"></script>

<!--chartjs js-->
<script src="../assets/js/chart/flot-chart/excanvas.js"></script>
<script src="../assets/js/chart/flot-chart/jquery.flot.js"></script>
<script src="../assets/js/chart/flot-chart/jquery.flot.time.js"></script>
<script src="../assets/js/chart/flot-chart/jquery.flot.categories.js"></script>
<script src="../assets/js/chart/flot-chart/jquery.flot.stack.js"></script>
<script src="../assets/js/chart/flot-chart/jquery.flot.pie.js"></script>
<!--dashboard custom js-->
<script src="../assets/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--height equal js-->
<script src="../assets/js/equal-height.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

</body>
</html>