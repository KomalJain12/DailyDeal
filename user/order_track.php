<?php
include("hhh.php");
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('you have to login first'); window.location.href='login.php';</script>";
}
$odid=$_GET['order_detail_id'];
$uid=$_SESSION['uid'];
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="order_history_user.php"><span class="glyphicon" aria-hidden="true"></span>Order History</a></li>
				<li class="active">Order Tracking Page</li>
			</ol>
		</div>
</div>
<style>
ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}


ol.progtrckr2 {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr2 li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr2[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr2[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr2[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr2[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr2[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr2[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr2[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr2[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr2 li.progtrckr2-done {
    color: black;
    border-bottom: 4px solid red;
}
ol.progtrckr2 li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr2 li:after {
    content: "\00a0\00a0";
}
ol.progtrckr2 li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr2 li.progtrckr2-done:before {
    content: "\2713";
    color: white;
    background-color: red;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
</style>
<?php
$conn=mysqli_connect("localhost","root","","dailydeal") or die("Connection Not Estalabish");
$q=mysqli_query($conn,"select * from order_detail where order_detail_id=$odid");
$row=mysqli_fetch_array($q);
$q2=mysqli_query($conn,"select * from order_master where order_id=".$row['order_id']);
$row2=mysqli_fetch_array($q2);
$pid=$row['pid'];
$q3=mysqli_query($conn,"select * from product_detail where pid=$pid");
$row3=mysqli_fetch_array($q3);
$image=$row3['pimage'];
?>
<div class="container">
<div class="col-md-1"><a href="product_detail.php?pid=<?php echo $pid; ?>"><img src="../vendor/images/<?php echo $image;?>" alt=" " class="media-object img-thumbnail" /></a></div><br>
<div><h3>Track Your Order</h3></div>
<a href="product_detail.php?pid=<?php echo $pid;?>"><span><strong><?php echo $row3['pname']; ?></strong></span> <span class="label label-info"><?php echo $row3['brand']; ?></span></a>
<div class="col-md">Order Made On: <?php echo $row2['order_date']; ?> by <?php echo $row2['full_name']; ?> </div>
<br><br><h4><a href="order_return.php?order_detail_id=<?php echo $odid; ?>" >Want to Cancel/Return this Product ??</a></h4>
<br><br><br>
<div style="padding: 20px">


<?php
if($row['dispatch_date']!=null && $row['status']==0)
{
?>
    <ol class="progtrckr2" data-progtrckr-steps="2">
    <li class="progtrckr2-done">Order Placed</li><!-- 
    --><li class="progtrckr2-done">Rejected</li>
<?php
}
elseif($row['status']==4)
{
?>
    <ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Pending</li><!-- 
    --><li class="progtrckr-done">Approved</li><!-- 
    --><li class="progtrckr-done">Shipped</li><!-- 
    --><li class="progtrckr-done">In-Transit</li><!-- 
    --><li class="progtrckr-done">Delivered On <?php echo $row['delivery_date'];?></li><!-- -->
<?php
}
else
{
    if($row['dispatch_date']==null && $row['status']==0)
    {
?>
    <ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Pending</li><!-- 
    --><li class="progtrckr-todo">Approved</li><!-- 
    --><li class="progtrckr-todo">Shipped</li><!-- 
    --><li class="progtrckr-todo">In-Transit</li><!-- 
    --><li class="progtrckr-todo">Delivered</li><!-- -->
<?php
    }
    elseif($row['dispatch_date']==null && $row['status']==1)
    {
?>
    <ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Order Processed</li><!-- 
    --><li class="progtrckr-done">Approved</li><!-- 
    --><li class="progtrckr-todo">Shipped</li><!-- 
    --><li class="progtrckr-todo">In-Transit</li><!-- 
    --><li class="progtrckr-todo">Delivered</li><!-- -->
<?php
    }
    elseif($row['dispatch_date']!=null && $row['status']==2)
    {
?>
    <ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Order Processed</li><!-- 
    --><li class="progtrckr-done">Approved</li><!-- 
    --><li class="progtrckr-done">Shipped</li><!-- 
    --><li class="progtrckr-done">In-Transit</li><!-- 
    --><li class="progtrckr-todo">Delivered</li><!-- -->
<?php
    }
}
?>
</ol>
<br><br>
</div>

<?php
$q5=mysqli_query($conn,"select * from review_master where pid=$pid and ud=$uid");
$row5=mysqli_num_rows($q5);
if($row['status']==4 || $row5>0)
{
?>
<form method="post">
<?php
}
else
{
?>
<form method="post" style="visibility: hidden;">
<?php
}
?>
<div class="form-group">
<label for="ctype">Rating</label>   
<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked="">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
</div>
</div>
<div class="form-group">
    <label for="ctype">Review</label>
    <textarea rows = "5" cols = "60" name = "review" id="details" class="form-control" placeholder="Enter Your Experiance With Product..."></textarea>
</div>
<div class="col-md-offset-0 col-md-3">
								<button class="btn btn-warning" name="btnsubmit" type="submit" onclick="ValidateNo();">
												<i class="ace-icon fa fa-check bigger-110"></i>
											    Submit Review
								</button>
</div>
<br><br>

</form>
</div>
<?php
if(isset($_POST['btnsubmit']))
{
  $rating=$_POST['rating'];
  $review=$_POST['review'];
  $rdate=date('Y-m-d');
  $ins=mysqli_query($conn,"insert into review_master values('',$uid,$pid,$rating,'$review','$rdate')");
  if($ins)
  {
        echo '<script>alert("Review Submitted"); window.location.href="order_history_user.php";</script>';
  }
  else
  {
        echo '<script>alert("Something error please try again later"); window.location.href="order_history_user.php";</script>';
  }
}
include("fff.php");
?>