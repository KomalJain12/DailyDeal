            <?php 
            include('hhh.php');
            $con=mysqli_connect("localhost","root","","dailydeal");
            ?>
             <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Dailydeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><a href="product_list.php"><span class="m-0"><h4 style="color: #ffffff;">Products</h4></span></a>
                                        <h3 class="mb-0"> <span class="counter">
                                            <?php
                                                $q=mysqli_query($con,"select * from product_detail");
                                                $cnt=mysqli_num_rows($q);
                                                echo $cnt;
                                            ?> 
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="box"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><a href="contactus.php"><span class="m-0"><h4 style="color: #ffffff;">Messages </h4></span></a>
                                        <h3 class="mb-0"><span class="counter">
                                             <?php
                                                $q=mysqli_query($con,"select * from contact_us");
                                                $cnt=mysqli_num_rows($q);
                                                echo $cnt;
                                            ?> 
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0"><h4 style="color: #ffffff;">Earnings</h4></span>
                                        <h3 class="mb-0">₹<span class="counter">
                                        <?php
                                        /*$order_detail_id=$_GET['order_detail_id'];*/

                                         $q="select SUM(ROUND(total_price)) AS sum from order_detail where status=4";
                                         $r=mysqli_query($con,$q);
                                         while($row=mysqli_fetch_array($r))
                                         {
                                            echo $row['sum'];
                                        ?>
                                            
                                        </span><small> This Month</small></h3>
                                    <?php } ?>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="navigation"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-success card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><a href="vendor_view.php"><span class="m-0"><h4 style="color: #ffffff;">All Vendors</h4></span></a>
                                        <h3 class="mb-0"><span class="counter">
                                             <?php
                                                $q=mysqli_query($con,"select * from vendor_master");
                                                $cnt=mysqli_num_rows($q);
                                                echo $cnt;
                                            ?> 
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                    <div class="col-sm-12">
                        <div class="card btn-months">
                            <div class="card-header">
                                <h5>Pie Chart Of Daily Activity</h5>
                                <div class="card-header-right">
                                    
                                </div>
                            </div>
                            <?php include 'chart.php' ?>

                        </div>
                    </div>
                    
                    <div class="col-xl-8 xl-50">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Our Vendors</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive products-table">
                                    <table class="table table-bordernone mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Skill Level</th>
                                            <th scope="col">Experience</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php
                                            $q="select * from vendor_master order by vid desc";
                                            $result = mysqli_query($conn,$q);
                                            while($row = mysqli_fetch_array($result))
                                            {
                                              ?>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../vendor/images/<?php echo $row['image']?>" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6><?php echo $row['vname']; ?><span class="text-muted digits">(14+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Designer</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">2 Year</td>
                                        </tr>
                                        <?php 
                                    }
                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
            <!-- Container-fluid Ends-->
            <?php 
            include('fff.php');
            ?>