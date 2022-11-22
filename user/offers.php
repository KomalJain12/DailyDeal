<?php 
include 'hhh.php';
?>
<html>
<body>
<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>Prdoct Image</strong></th>
<th scope="row"><strong>Offer</strong></th>
<th scope="row"><strong>Offer Date</strong></th>
<!-- 
	<th scope="row"><strong>review</strong></th> -->
</tr>
</thead>
<tbody>
	<?php
$con=mysqli_connect("localhost","root","","dailydeal");
?>
Today's Offers:
<?php

	/*date_default_timezone_set('Asia/Kolkata');*/
	$curdate=date('Y-m-d h:i:s');

	 $q="select p.*,o.* from offer o, product_detail p where p.pid=o.pid and exdate='$curdate'";
	 $result = mysqli_query($con,$q);
	 while($row = mysqli_fetch_array($result))
	 {
	    ?>
	 <tr>
	 <td><?php echo $row['pname']; ?></td>
	 <td><a href="#"><img src="../vendor/images/<?php echo $row['pimage'];?>" height="250" width="250"/></a></td>
	<td><?php echo $row['offer']; ?>%</td>
	<td><?php echo $row['exdate']; ?></td>
	</tr>
	</tbody>
</table>
<?php
}
	 ?>
	 <table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>Prdoct Image</strong></th>
<th scope="row"><strong>Offer</strong></th>
<th scope="row"><strong>Offer Date</strong></th>
<!-- <th scope="row"><strong>review</strong></th> -->
</tr>
</thead>
<tbody>
	
Upcoming Offers:
<?php

	/*date_default_timezone_set('Asia/Kolkata');*/
	$curdate=date('Y-m-d h:i:s');
	/*echo $curdate;*/

	 $q="select p.*,o.* from offer o, product_detail p where p.pid=o.pid and exdate>'$curdate'";
	 $result = mysqli_query($con,$q);
	 while($row = mysqli_fetch_array($result))
	 {
	    ?>
	 <tr>
	 <td><?php echo $row['pname']; ?></td>
	 <td><a href="#"><img src="../vendor/images/<?php echo $row['pimage'];?>" height="250" width="250"/></a></td>
	<td><?php echo $row['offer']; ?>%</td>
	<td><?php echo $row['exdate']; ?></td>
	</tr>
<?php
}
	 ?>

</tbody>
</table>
 <table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>Prdoct Image</strong></th>
<th scope="row"><strong>Offer</strong></th>
<th scope="row"><strong>Offer Date</strong></th>
<!-- <th scope="row"><strong>review</strong></th> -->
</tr>
</thead>
<tbody>
Past Offers:
<?php

	/*date_default_timezone_set('Asia/Kolkata');*/
	$curdate=date('Y-m-d h:i:s');
	
	 $q="select p.*,o.* from offer o, product_detail p where p.pid=o.pid and exdate<'$curdate'";
	 $result = mysqli_query($con,$q);
	 while($row = mysqli_fetch_array($result))
	 {
	    ?>
	 <tr>
	 <td><?php echo $row['pname']; ?></td>
	 <td><a href="#"><img src="../vendor/images/<?php echo $row['pimage'];?>" height="250" width="250"/></a></td>
	<td><?php echo $row['offer']; ?>%</td>
	<td><?php echo $row['exdate']; ?></td>
	</tr>
<?php
}
	 ?>

</tbody>
</table>
</body>
</html>
<?php 
include 'fff.php';
?>