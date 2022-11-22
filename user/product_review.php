<?php
include('hhh.php');
?>
<html>
<body>

<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Review</li>
			</ol>
		</div>
	</div>
<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Leave a<span> Review</span></h2>

				<form action="#" method="post">
					<textarea name="review" placeholder="Your review here..." required=""></textarea>
					<input type="submit" name="btnin" value="Submit">
				</form>
				<?php
$con=mysqli_connect("localhost","root","","dailydeal");
?>
<?php
session_start();
$pid=$_GET['x'];
$uid=$_SESSION['uid'];
$review=$_POST['review'];
if(isset($_POST['btnin']))
{
$q=mysqli_query($con,"insert into review_master values('','$pid','$uid','$review')");
if($q)
	 echo "<script> alert('Your response has been submitted');</script>";
else
	header("location:login.php");
}
?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>user Name</strong></th>
<th scope="row"><strong>user mail Name</strong></th>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>review</strong></th>
</tr>
</thead>
<tbody>
<?php
if(isset($_GET['x']))
{
	 $id=$_GET['x'];
	 $uid=$_SESSION['uid'];
	 $q="Select ur.*,pd.*,r.* from user_master ur,product_detail pd,review_master r where ur.uid=r.uid and pd.pid=r.pid order by rid desc";
	 $result = mysqli_query($conn,$q);
	 while($row = mysqli_fetch_array($result))
	 {
	    ?>
	 <tr>
	 <td><?php echo $row['name']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['pname']; ?></td>
	<td><?php echo $row['review']; ?></td>
	</tr>
	<?php
	 }
	}
	 ?>

</tbody>
</table>
</body>
</html>
<?php
include('fff.php');
?>

