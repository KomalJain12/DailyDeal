
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
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php

$id=$_GET['pid'];

 $q=mysqli_query($conn,"select * from product_detail where pid=$id");
$row=mysqli_fetch_array($q);
 ?>


    <div class="products">
        <div class="container">
            <div class="agileinfo_single">
                
                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="../vendor/images/<?php echo $row['pimage']?>" height="400" width="300"  alt=" " class="img-responsive">
                </div>
                <div class="col-md-8 agileinfo_single_right">
                <h2><?php echo $row['brand'];?></h2>
                 <h4><?php echo $row['pname'];?></h4>
                <span class="review-text">
                    (<?php
                        $q1=mysqli_query($conn,"select avg(rating) as avg from review_master where pid=$id order by rid");
                         $res=mysqli_fetch_assoc($q1);
                        $cnt=mysqli_num_rows($q1);
                        echo $cnt."  Customer Reviews";
                        ?>)/</span>
                                                    
                <p>Product code: <span class="item"><?php echo $row['sku'];?></span></p>
                    <div class="rating1">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <?php 
                                                                if($res['avg']!=null){
                                                                    echo number_format((float)$res['avg'], 1, '.', '');
                                                                }
                                                                else{
                                                                    echo "(No Ratings)";
                                                                }
                                                                ?>
                    </div>
                    <div class="w3agile_description">
                        <h4>Description :</h4>
                        <p><?php echo $row['description'];?></p>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            <h4 class="m-sing">Price : Rs.<?php echo $row['rate'];?> <span> MRP : Rs.<?php echo $row['mrp'];?></span></h4>
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">
                            <form action="#" method="post">
                                <fieldset>
                                    <?php echo "<a class='btn btn-primary' href=xyz.php?x=$row[0]>Add to Cart</a>";?></a>
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
$r1=mysqli_query($conn,"select * from review_master where pid=$id");
$rres1=mysqli_num_rows($r1);
if($rres1>0)
{
    ?>
<div class="container">
    <h2 class="text-center">User Ratings And Reviews</h2>
    </div>

    <?php
    while($rrow=mysqli_fetch_array($r1))
    {
        $count=1;
        $ruser=mysqli_query($conn,"select * from user_master where uid=".$rrow['uid']);
        $urow=mysqli_fetch_array($ruser);
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
            
                <div class="col-md-10">
                    <p>
                        <a class="float-left" ><strong><?php echo $urow['name']; ?></strong></a>
                        <?php while($count<=$rrow['rating'])
                        {?>
                        <span class="float-right"><i class="fa fa-star blue-star"></i></span>
                        <?php
                        $count++;
                        }?>
                        
                   </p>
                   <div class="clearfix"></div>
                    <p><?php echo $rrow['review']; ?></p>
                 
                </div>
            </div>
           
    </div>
    </div>
</div>
<br><br>
<?php
    }
}
?>
<?php
include('fff.php');
?>