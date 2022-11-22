<html>
	<head>
	<style>
		.test1
		{
			
			position:relative;
			left:520px;
			top:-400px;
			height:250px;
			width:220px;
			border:3px solid #27408B;
			border-radius:10px;
		}
	</style>
	</head>
	<body>
		<?php
					
					error_reporting(1);
					include('head.php');
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
					
				                    
                
				<div style="height:60%;width:50%;position:relative;top:-50px;margin-left:250;background:#B9D3EE;margin-top:80;border:3px solid #27408B;border-radius:10px;font-family:arial;color:black;">
						
						<div>
							<label style="padding:10px;"> Order Id</label>
							<label><b><?php echo $row['order_id'];?></b></label>							
							
						</div>
						<div>
							<label style="padding:10px;">Order Date</label>
							<label><b><?php echo $row2['order_date'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Name</label>
							<label><b><?php echo $row2['full_name'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Email</label>
							<label><b><?php echo $row2['email'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Customer Phone</label>
							<label><b><?php echo $row2['phno'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Shipping Address</label>
							<label><b><?php echo $row2['shipping_add'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Product Name</label>
							<label><b><?php echo $row3['pname'];?></b></label>
						</div>
						
						<div>
							<label style="padding:10px;">Quantity</label>
							<label><b><?php echo $row['pqty'];?></b></label>
						</div>
						<div>
							<label style="padding:10px;">Total Amount</label>
							<label><b><?php echo $row['total_price'];?></b></label>
						</div>
						<div style="margin-left:200px; margin-top:50px;">
							
<a href="order_status.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> Accept </button></a>

<a href="order_dispatch.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" ><button type="button" class="btn btn-primary" name="delete"> Dispatch </button></a>

<a href="order_cancel.php?order_detail_id=<?php echo $row["order_detail_id"]; ?>" onclick='return checkdelete ()'><button type="button" class="btn btn-primary" name="delete"> Cancel </button></a>

<a href="order_view.php" ><button type="button" class="btn btn-primary" name="delete"> Back </button></a>

						</div>
						<div>
						<img class="test1" src= "../vendor/images/<?php echo $row3['pimage'];?>">		
						</div>
						
				</div>
<script>
function checkdelete()
{
    return confirm('are you sure you want to cancel');
}
</script>
				
		
		<?php
					
					
					include('foot.php');
		?>
	</body>
</html>