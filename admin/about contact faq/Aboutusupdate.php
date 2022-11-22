<?php
include('hdx.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head>
<body>

<?php
	
		$con=mysqli_connect("localhost","root","","dailydeal");
		$ID=$_GET['x'];
		$query=mysqli_query($con,"select * from Aboutus where ID=$ID");
		$row=mysqli_fetch_array($query);
		if(isset($_POST['btnup']))
		{
			$ID=$_POST['textid'];
			$Title=$_POST['texttitle'];
			$Description=$_POST['t1'];

			$q=mysqli_query($con,"update Aboutus set ID='$ID' ,Title='$Title' , Description='$Description' where ID=$ID");

		if($q)
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
    <label class="control-label col-sm-1" for="ID">ID:</label>
    <div class="col-sm-5">
      <input type="ID" name="textid" class="form-control"value="<?php echo $row['ID']; ?>" id="ID" placeholder="Enter ID">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="Title">Title:</label>
    <div class="col-sm-5">
      <input type="Title" name="texttitle" class="form-control"value="<?php echo $row['Title']; ?>" id="Title" placeholder="Enter Title">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="Description">Description:</label>
    <div class="col-sm-5">
      <textarea name=t1 id=t1 value="<?php echo $row['Description']; ?>" placeholder="Enter Title"></textarea>
    </div>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnup" class="btn btn-default">Update</button>
      <a href="Aboutus.php">Back to main page</a>
    </div>
    </table> 
</form>
</body>
<script>
         CKEDITOR.replace( 't1' );
 </script>

</html>

<?php
include('fff.php');
?>
