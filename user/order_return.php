
<?php
include('hhh.php');
?>
<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Singlepage</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<?php
            $con=mysqli_connect("localhost","root","","dailydeal") or die("connection fail");
            
            $abid=$_GET['order_detail_id'];
            $q=mysqli_query($con,"select * from order_detail where order_detail_id=$abid");
            $row=mysqli_fetch_array($q);
            $q2=mysqli_query($con,"select * from order_master where order_id=".$row['order_id']);
            $row2=mysqli_fetch_array($q2);
            $q3=mysqli_query($con,"select * from product_detail where pid=".$row['pid']);
            $row3=mysqli_fetch_array($q3);
            
        ?>


    <div class="products">
        <div class="container">
            <div class="agileinfo_single">
                
                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="../vendor/images/<?php echo $row3['pimage']?>" height="400" width="300"  alt=" " class="img-responsive">
                </div>
                <div class="col-md-8 agileinfo_single_right">
                <h2>Product Name : <?php echo $row3['pname'];?></h2>
                <span class="review-text"></span>
                                                    
                <p>Order Date : <span class="item"><?php echo $row2['order_date'];?></span></p>
                 <p>Order Id : #<span class="item"><?php echo $row['order_id'];?></span></p>
                    <div class="rating1">Quantity
                        <?php echo $row['pqty']; ?>
                    </div>
                    <div class="w3agile_description">
                        <h4>Total Amount :</h4>
                        <p><?php echo $row['total_price'];?></p>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">
                            <form action="#" method="post">
                                <fieldset>
                                   <a href="order_return_status.php?order_detail_id=<?php echo $abid; ?>" ><button type="button" class="btn btn-primary" name="delete"> Return </button></a>
                                     <a class='btn btn-primary' href=order_history_user.php>Go Back</a>
                                </fieldset>
                            </form>
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