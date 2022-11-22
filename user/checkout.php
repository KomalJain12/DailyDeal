<?php
include('hhh.php');
session_start(); 
?>
	
<div class="checkout">
		<div class="container">
			<h2>Your shopping cart contains:<!--  <span STYLE="font-size:6mm"> -->&nbsp;&nbsp;<b><u>
				<?php
				$con= mysqli_connect("localhost","root","","dailydeal");
    $q=mysqli_query($con,"select * from cart where uid=$uid");
    $cnt=mysqli_num_rows($q);
    echo $cnt;
    ?> Product<!-- </span> --></u></b></h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>MRP</th>
							<th>Price</th>
							<th>Offer</th>
							<th>Total</th>
							<th>Total Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<?php
					$conn = mysqli_connect("localhost","root","","dailydeal");
					$uid=$_SESSION['uid'];
					if(!isset($_SESSION['uid']))

						echo "<script>alert('you have to login first'); window.location.href='login.php';</script>";
				
					$q=mysqli_query($conn,"select * from cart where uid=$uid"); 
					$cnt=1;
					while($row=mysqli_fetch_array($q))
					{
						$pid=$row['pid'];
						$cartid=$row[0];
						$q1=mysqli_query($conn,"select * from product_detail where pid=$pid");
						while($row1=mysqli_fetch_array($q1))
						{
				
				?>
					<tr class="rem1">
						<td class="invert"><?php echo $cnt; $cnt++;?></td>
						<td class="invert" style="width: 40%; height: 40%;"><?php echo "<a href=product_detail.php?pid=$row1[0]>";?>
							<img src="../vendor/images/<?php echo $row1[10];?>"  style="width: 20%; height: auto;" /></a></td>

							<!-- quntity -->
						<td class="invert">
						
							 <div class="quantity"> 
								<div class="quantity-select">
									<!-- <div class="entry value-minus "><a href=""></a>&nbsp;</div> -->
							<?php echo "<a href='decrement.php?m=$cartid'>"; ?><div class="entry value-minus">&nbsp;</div></a>
									<div class="entry value"><?php echo $row['qty']; ?></div>
							<?php echo "<a href=increment.php?m=$cartid >"; ?><div class="entry value-plus active">&nbsp;</div></a>
								</div>
							</div>	
						</td>
					<!-- <td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus"></div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td> -->
						<!-- quntity -->
						<td class="invert"><?php echo $row1['pname'];?></td>
						<td><?php $mrp=$row1['mrp']; 
						echo $mrp;
						$mrp1=$mrp1+$mrp;?></td>
						<td class="invert">
						<?php 
				
				
						echo $row1['rate']; 
						/*$rate=$row1['rate'];
						$mrp=$row1['mrp'];
						$total_1=$total_1+$rate;
						$mrp_1=$mrp_1+$mrp;*/
						?></td>
						<td>
							<?php
								$q2=mysqli_query($conn,"select * from offer where pid=$pid");
							$row2=mysqli_fetch_array($q2);
								
							 echo $row2['offer'];
							 ?> 
						</td>
						<td>
							<?php
						
						$qty=$row['qty'];
						$mrp=$row1['mrp'];
						$total=$qty*$mrp;
						echo $total;
						$total_1=$total_1+$total;
						?>
						</td>
						<td>
							<?php
							$offer=$row2['offer'];
						$qty=$row['qty'];
						$rate=$row1['rate'];
						
						$total=$qty*$rate;
						$dis=$total*($offer/100);
						$tot=$total-$dis;
						echo $tot;
						$total_price=$total_price+$tot;
						?>
						</td>
						
							<td class="invert">
							
								<a href="cart_delete.php?cartid=<?php echo $row["cartid"];?>" onclick='return checkdelete ()'><div class="rem"><div class="close1"></div></a>

							</div>
							<!-- <script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script> -->
						</td>
						
					</tr>
				<?php	
			}
					}
				?>	
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>				
			</div>
			<br>
			<br>
			<div class="checkout-left-basket">
					<button type="button" class="btn btn-dark"><a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a></button>
				</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Total MRP <i>-</i> <span><?php echo $total_1;?> </span></li>
					
						<li>Discount <i>-</i> <span><?php $tobe=$total_1-$total_price;
						echo $tobe;?></span></li>
						<li>Amount To Be Paid <i>-</i> <span><?php echo $total_price;?></span></li>
					</ul>

				</div>
				<div class="checkout-right-basket">
					<?php echo "<a href='placeorder2.php?tot=$total_price'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>Continue Shopping</a>"; ?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<script>
function checkdelete()
{
    return confirm('are you sure you want to remove this product from cart?');
}
</script>
<?php
include('fff.php');
?>
