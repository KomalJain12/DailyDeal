<?php
	 $conn=mysqli_connect("localhost","root","","dailydeal");
	$city_id=$_POST["category_id"];
	$result = mysqli_query($conn,"SELECT * FROM citytbl where state_id=$city_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["city_id"];?>"><?php echo $row["city_name"];?></option>
<?php
}
?>