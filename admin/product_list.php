
<?php
include('hhh.php');
?>

 <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                     <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Products
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Vendor</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
                    <?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php

$q="Select * from product_detail;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
    while($row = mysqli_fetch_array($result)) 
        {
            $pid=$row['pid'];
            ?>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                           <a href="../user/product_detail.php?pid=<?php echo $pid; ?>"><img src="../vendor/images/<?php echo $row['pimage']?>" height="220"  alt="product"></a>
                                        </div>
                                        <!--<div class="product-back">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:void(0)" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>
                                        </div>-->
                                        <div class="new-label1">
                                            <div>New</div>
                                        </div>
                                        <div class="on-sale1">
                                            On Sale
                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            <div class="detail-left">
                                                
                                                <a href="javascript:void(0)">
                                                    <h6 class="price-title">
                                                        <?php echo $row['pname'];?>
                                                    </h6>
                                                </a>
                                            </div>
                                            <br><br><br>
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rs.<?php echo $row['mrp'];?>
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rs.<?php echo $row['rate'];?>
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
            </div>
            
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<?php
include('fff.php');
?>