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
                                <h3>View Returns
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Return</li>
                                <li class="breadcrumb-item active">View Return </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
 <div class="card">
    <div class="card-header">
        <center><h3 style="background-color:#000000; padding:15px; color:#ffffff;">Your Returns </h3></center>
    </div>
<div class="card-body">
    
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr style="background: #000000;">
                                            <th scope="col" style="color: #ffffff;">Return ID</th>
                                            <th scope="col" style="color: #ffffff;">Product Name</th>
                                            <th scope="col" style="color: #ffffff;">Product SKU</th>
                                            <th scope="col" style="color: #ffffff;">Brand Name</th>
                                            <th scope="col" style="color: #ffffff;">Total Quantity</th>
                                            <th scope="col" style="color: #ffffff;">Total Price</th>
                                            <th scope="col" style="color: #ffffff;">Return Date</th>
                                            <th scope="col" style="color: #ffffff;">Return Status</th>
                                            <th scope="col" style="color: #ffffff;">Accept Return</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody class="thead-light">
                                            <?php
                                            $conn=mysqli_connect("localhost","root","","dailydeal") or die("Connection Not Estalabish");
                                              ?>
<?php
/*$q="select o.*,m.* from order_master o,order_detail m where o.order_id=m.order_id and vid=$vid ORDER BY order_detail_id desc;";*/
                               $vid=$_SESSION['id'];
                                $f=mysqli_query($conn,"select * from order_return_master where pid in (select pid from product_detail where vid=$vid) order by return_id DESC");
                                $fres=mysqli_num_rows($f);
                                if($fres>0)
                                {
                                while($row=mysqli_fetch_array($f))
                                {
                                    $f3=mysqli_query($conn,"select * from product_detail where pid=".$row['pid']);
                                    $row3=mysqli_fetch_array($f3);
                                    $oid=mysqli_query($conn,"select * from order_detail where order_detail_id=".$row['order_detail_id']);
                                    $row4=mysqli_fetch_array($oid);
                                                                            
                               ?>
                                        <tr>
                                            <td class="digits">#<?php echo $row['return_id']; ?></td>
                                            <td class="digits"><?php echo $row3['pname']; ?></td>
                                            <td class="digits"><?php echo $row3['sku']; ?></td>
                                            <td class="digits"><?php echo $row3['brand']; ?></td>
                                            <td class="digits"><?php echo $row4['pqty']; ?></td>
                                            <td class="digits"><?php echo $row4['total_price']; ?></td>
                                            <td class="font-danger"><?php echo $row['return_date']; ?></td>
                                            <td>
<?php if($row['status']==1)
{
  $ad="Approved";
  echo $ad;
}

else{

     $ad="Unapproved"; 
    echo $ad;                                       
}
?>
</td>



<td>
<a href="return_status.php?return_id=<?php echo $row["return_id"]; ?>" onclick='return cancel ()'><button type="button" class="btn btn-primary" name="delete"> Accept </button></a></td>
<td>

                                        </tr>
                                      
<?php
                                }    
                            }
                            else{
                                echo "<tr>There Are no Returns for you</tr>";
                            }
                            
                                ?>

                                        </tbody>
                                    </table>
                                   <!--  </div> -->
                                </div> 

                            
                        </div>
                    </div>
                    <script>
function dispatch()
{
    return confirm('Are you Sure to Dispatch Order ?');
}
</script>
                   
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<?php 
include('foot.php');
 ?>