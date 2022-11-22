<?php 
include('hhh.php');
?>

 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Product
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">View Orders </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
 <div class="card">
    <div class="card-header">
        <center><h3 style="background-color:#000000; padding:15px; color:#ffffff;">Latest Orders</h3></center>
    </div>
<!-- <div class="card-body"> -->
    
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
                                            <th scope="col" style="color: #ffffff;">Inform</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody class="thead-light">
    <?php
$conn=mysqli_connect("localhost","root","","dailydeal") or die("Connection Not Estalabish");            
?>
<?php
/*$q="select o.*,m.* from order_master o,order_detail m where o.order_id=m.order_id and vid=$vid ORDER BY order_detail_id desc;";*/
                               /*$vid=$_SESSION['id'];*/
                                $f=mysqli_query($conn,"select * from order_detail where pid in (select pid from product_detail) and status=0 order by order_detail_id DESC");
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
else{

     $ad="Unapproved"; 
    echo $ad;                                       
}
?>
</td>


<td>
<a href="admin_view_pdetail.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> View </button></a></td>
<td>
<a href="order_cancel.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" onclick='return checkdelete ()'><button type="button" class="btn btn-primary" name="delete"> Inform </button></a>
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
                                <!-- </div> --> 

                            
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
include('fff.php');
 ?>