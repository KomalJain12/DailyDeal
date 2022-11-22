<?php
include('hhh.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product Detail
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Vendors</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
	<div class="container-fluid">
    <?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
if(isset($_GET['x']))
{
 $id=$_GET['x'];
 $q="Select * from product_detail where pid=$id;";
 $result = mysqli_query($conn,$q);
 while($row = mysqli_fetch_array($result))
 {
    ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img src="../vendor/images/<?php echo $row['pimage']?>" height="400" width="300" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                                <li role="presentation" class="show">
                                                    <a href="#first" role="tab" data-toggle="tab">
                                                        <img class="img-fluid" src="images/tab/1.jpg" alt="" width="50">
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#second" role="tab" data-toggle="tab"><img class="img-fluid" src="images/tab/2.jpg" alt="" width="50"></a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#third" role="tab" data-toggle="tab"><img class="img-fluid" src="images/tab/3.jpg" alt="" width="50"></a>
                                                </li>
												<li role="presentation">
                                                    <a href="#for" role="tab" data-toggle="tab"><img class="img-fluid" src="images/tab/4.jpg" alt="" width="50"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4><?php echo $row['pname'];?></h4>
                                                <div class="star-rating mb-2">
                                                    <ul class="produtct-detail-tag">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#">Write a review?</a>
                                                </div>
                                                <pre class="price">Rs.<?php echo $row['rate'];?>  MRP:<span><strike>Rs.<?php echo $row['mrp'];?></strike></span></pre>
                                                <p>Availability: <span class="item"> In stock <i
                                                            class="fa fa-shopping-basket"></i></span>
                                                </p>
                                                <p>Product code: <span class="item"><?php echo $row['sku'];?></span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p>Product tags:&nbsp;&nbsp;
                                                    <span class="badge badge-success light">bags</span>
                                                    <span class="badge badge-success light">clothes</span>
                                                    <span class="badge badge-success light">shoes</span>
                                                    <span class="badge badge-success light">dresses</span>
                                                </p>
                                                <p class="text-content"><?php echo $row['description'];?></p>
                                                <div class="filtaring-area my-3">
                                                    <div class="size-filter">
                                                        <h4 class="m-b-15">Select size</h4>
                                                        <ul>
                                                            <li class="btn btn-primary light sharp">x</li>
                                                            <li class="btn btn-primary light sharp">m</li>
                                                            <li class="btn btn-primary light sharp">l</li>
                                                            <li class="btn btn-primary light sharp">xs</li>
                                                            <li class="btn btn-primary light sharp">xl</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--Quantity start-->
												<div class="col-2 px-0">
													<input type="number" name="num" class="form-control input-btn input-number" value="1">
												</div>
                                                <!--Quanatity End-->
                                                <div class="shopping-cart mt-3">
                                                    <a class="btn btn-primary btn-lg" href="#"><i
                                                            class="fa fa-shopping-basket mr-2"></i>Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</div>
                <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    
    <script src="vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->

    <!-- Svganimation scripts -->
<script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
</body>
<?php
include('fff.php');
?>
