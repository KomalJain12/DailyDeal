
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head>
<body>

<?php
include('hhh.php');
?>

<?php
//error_reporting(0);
$con=mysqli_connect("localhost","root","","dailydeal");
if(isset($_POST['btnins']))
{
	$Title=$_POST['texttitle'];
	$Description=$_POST['t1'];
	$query=mysqli_query($con,"insert into Aboutus values('','$Title','$Description')");
	if($query)
		echo "inserted";
	else
		echo "not inserted";
}
?>

<form class="form-horizontal" action="/action_page.php" >
<div class="form-group">
    <label class="control-label col-sm-1" for="Title">Title:</label>
    <div class="col-sm-5">
      <input type="Title" name="texttitle" class="form-control" id="Title" placeholder="Enter Title">
    </div><br><br></div>

<div class="form-group">
    <label class="control-label col-sm-1" for="Description">Description:</label>
    <div class="col-sm-5">
      <textarea name=t1 id=t1  placeholder="Enter Title"></textarea>
    </div><br><br></div>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnins" class="btn btn-default">Insert</button>
    </div></div>
    
</form>
<script>
         CKEDITOR.replace( 't1' );
 </script>

</body>


</html>



