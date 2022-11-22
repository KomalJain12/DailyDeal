<?php
include('hdx.php');
?>

<?php

		$con=mysqli_connect("localhost","root","","online_forum");
		$Id=$_GET['x'];
		$query=mysqli_query($con,"select * from Contactus where Id=$Id");
		$row=mysqli_fetch_array($query);
		if(isset($_POST['btnup']))
		{
			$Id=$_POST['textid'];
			$Name=$_POST['textname'];
			$Email=$_POST['textemail'];
			$PhoneNo=$_POST['textphoneno'];

			$query=mysqli_query($con,"update Contactus set Id=$Id ,Name='$Name' , Email='$Email', PhoneNo='$PhoneNo'  where Id=$Id ");

		if($query)
		{
			echo "<script>alert('updated record'); </script>";
		}	
		else
		{
			echo "Not Updated";
		}
	}
?>
<form method=post>
<form class="form-horizontal" action="/action_page.php" >
<div class="form-group">
    <label class="control-label col-sm-1" for="Id">Id:</label>
    <div class="col-sm-5">
      <input type="text" name="textid" class="form-control" value="<?php echo $row[0]; ?>" id="Id" placeholder="Enter Id">
    </div><br><br>


<div class="form-group">
    <label class="control-label col-sm-1" for="Name">Name:</label>
    <div class="col-sm-5">
      <input type="text" name="textname" class="form-control" value="<?php echo $row[1]; ?>" id="Name" placeholder="Enter Name">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="Email">Email:</label>
    <div class="col-sm-5">
      <input type="text" name="textemail" class="form-control" value="<?php echo $row[2]; ?>"id="Email" placeholder="Enter Email">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="PhoneNo">PhoneNo:</label>
    <div class="col-sm-5">
      <input type="text" name="textphoneno" class="form-control" value="<?php echo $row[3]; ?>"id="PhoneNo" placeholder="Enter PhoneNo">
    </div><br><br>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnup" class="btn btn-default">Update</button>
    <a href="Contactus.php">Back to main page</a>
    </div> </div>
    </table> 
</form>

<?php
include('fff.php');
?>