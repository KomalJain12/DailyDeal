<?php 
error_reporting(1);
session_start();
include('head.php');
?>

 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Orders
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                               
                                <li>New Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
 <div class="card"><br>
    <div class="card-header">
        <center><h3 style="background-color:#000000; padding:15px; color:#ffffff;">Latest Orders</h3></center>
    </div><br>
<div class="card-body">
    
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr style="background: #000000;">
                                            <th scope="col" style="color: #ffffff;">Order ID</th>
                                            <th scope="col" style="color: #ffffff;">Product Name</th>
                                            <th scope="col" style="color: #ffffff;">Product SKU</th>
                                            <th scope="col" style="color: #ffffff;">Brand Name</th>
                                            <th scope="col" style="color: #ffffff;">Total Quantity</th>
                                            <th scope="col" style="color: #ffffff;">Total Price</th>
                                            <th scope="col" style="color: #ffffff;">Order Status</th>
                                            <th scope="col" style="color: #ffffff;">View Order</th>
                                            <th scope="col" style="color: #ffffff;">Accept Order</th>
                                            <th scope="col" style="color: #ffffff;">Dispatch Order</th>
                                            <th scope="col" style="color: #ffffff;">Cancel Order</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody class="thead-light">
                                            <?php
                                            $conn=mysqli_connect("localhost","root","","dailydeal") or die("Connection Not Estalabish");
                                              ?>
<?php
/*$q="select o.*,m.* from order_master o,order_detail m where o.order_id=m.order_id and vid=$vid ORDER BY order_detail_id desc;";*/
                               $vid=$_SESSION['id'];
                                $f=mysqli_query($conn,"select * from order_detail where pid in (select pid from product_detail where status=0 and vid=$vid) order by order_detail_id DESC");
                                $fres=mysqli_num_rows($f);
                                if($fres>0)
                                {
                                while($row=mysqli_fetch_array($f))
                                {
                                    $f3=mysqli_query($conn,"select * from product_detail where pid=".$row['pid']);
                                    $row3=mysqli_fetch_array($f3);
                                                                            
                               ?>
                                        <tr>
                                            <td class="digits">#<?php echo $row['order_id']; ?></td>
                                            <td class="digits"><?php echo $row3['pname']; ?></td>
                                            <td class="digits"><?php echo $row3['sku']; ?></td>
                                            <td class="digits"><?php echo $row3['brand']; ?></td>
                                            <td class="font-danger"><?php echo $row['pqty']; ?></td>
                                            <td class="digits"><?php echo $row['total_price']; ?></td>
                                            
                                            <td>
<?php if($row['status']==1)
{
  $ad="Approved";
  echo $ad;
}
elseif($row['status']==2)
{
    $ad="Dispatched"; 
    echo $ad;
}
elseif($row['status']==3)
{
    $ad="Cancelled"; 
    echo $ad;
}
elseif($row['status']==4)
{
    $ad="Delivered"; 
    echo $ad;
}
elseif($row['status']==5)
{
    $ad="Returned"; 
    echo $ad;
}
else{

     $ad="Unapproved"; 
    echo $ad;                                       
}
?>
</td>


<td>
<a href="order_detail_view.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> View </button></a></td>
<td>
<a href="order_status.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> Accept </button></a></td>
<td>
<a href="order_dispatch.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> Dispatch </button></a></td>
<td>
<a href="order_cancel.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" onclick='return checkdelete ()'><button type="button" class="btn btn-primary" name="delete"> Cancel </button></a>
</td>
                                        </tr>
                                      
<?php
                                }    
                            }
                            else{
                                echo "<tr>There Are no orders for you</tr>";
                            }
                            
                                ?>

                                        </tbody>
                                    </table>
                                   <!--  </div> -->
                                </div> 

                            
                        </div>
                    </div>
                    <script>
function checkdelete()
{
    return confirm('Are you Sure to Cancel Order ?');
}
</script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<?php 
include('foot.php');
 ?>