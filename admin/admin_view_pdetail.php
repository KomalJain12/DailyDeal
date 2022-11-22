

	
	<style>
		.test1
		{
			
			position:relative;
			left:520px;
			top:-500px;
			height:350px;
			width:300px;
			border:3px solid #27408B;
			border-radius:10px;
		}
	</style>
	
		<?php
		include('hhh.php');
		?>
	
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
                                <li class="breadcrumb-item"><a href="#"> Sales</a></li>
                                <li class="breadcrumb-item"><a href="admin_view_pdetail.php">View Orders</a></li>
                                <li class="breadcrumb-item active">View Product Detail</li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<!-- <div class="form"> -->
<!--  <div class="card"> -->
    <div class="card-header">
    	<center><h3 style="background-color:#000000; padding:15px; color:#ffffff;">Order Details</h3></center>
    </div>              
                
				<!-- <div style="height:60%;width:50%;position:relative;top:-50px;margin-left:250;background:#B9D3EE;margin-top:80;border:3px solid #27408B;border-radius:10px;font-family:arial;color:black;"> -->
						
						<br><br><br><div>
							<label style="padding:10px;"> Order Id :</label>
							<label><b>#<?php echo $row['order_id'];?></b></label>							
							
						</div>
						<div>
							<label style="padding:10px;">Order Date :</label>
							<label><b><?php echo $row2['order_date'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Name :</label>
							<label><b><?php echo $row2['full_name'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Email :</label>
							<label><b><?php echo $row2['email'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Phone :</label>
							<label><b><?php echo $row2['phno'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Shipping Address :</label>
							<label><b><?php echo $row2['shipping_add'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Product Name :</label>
							<label><b><?php echo $row3['pname'];?></b></label>
						</div>
						
						<div>
							<label style="padding:10px;">Quantity :</label>
							<label><b><?php echo $row['pqty'];?></b></label>
						</div>
						
						<div>
							<label style="padding:10px;">Total Amount :</label>
							<label><b><?php echo $row['total_price'];?></b></label>
							<center><div>
							<h4><label style="padding:10px;">Brand :</label>
							<label><b><?php echo $row3['brand'];?></b></label></h4>
						</div></center>
						<a href="order_view.php" ><button type="button" class="btn btn-primary" name="delete"> Back </button></a>
						</div>
						<!-- <div style="margin-left:200px; margin-top:50px;"> -->
						<img class="test1" src= "../vendor/images/<?php echo $row3['pimage'];?>">


						<!-- </div> -->
						<!-- <div>
							
						</div> -->
						
				<!-- </div> -->

		<!-- 	</div> -->

		<!-- </div> -->			
		
<?php		
include('fff.php');
?>
	