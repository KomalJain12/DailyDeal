<?php
include('hdx.php');
?>
<?php
	
		$con=mysqli_connect("localhost","root","","online_forum");
		$ID=$_GET['x'];
		$query=mysqli_query($con,"select * from FAQ where ID=$ID");
		$row=mysqli_fetch_array($query);
		if(isset($_POST['btnup']))
		{
			$ID=$_POST['textid'];
			$Question=$_POST['textquestion'];
			$Answer=$_POST['textanswer'];

			$query=mysqli_query($con,"update FAQ set ID='$ID' ,Question='$Question' , Answer='$Answer' where ID=$ID");

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
<form method="POST">
<form class="form-horizontal" action="/action_page.php" >

<div class="form-group">
    <label class="control-label col-sm-1" for="Id">ID:</label>
    <div class="col-sm-5">
      <input type="text" name="textid" class="form-control" value="<?php echo $row['ID']; ?>"id="Id" placeholder="Enter ID">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="Question">Question:</label>
    <div class="col-sm-5">
      <input type="text" name="textquestion" class="form-control" value="<?php echo $row['Question']; ?>"id="Question" placeholder="Enter Question">
    </div><br><br>

    <div class="form-group">
    <label class="control-label col-sm-1" for="Answer">Answer:</label>
    <div class="col-sm-5">
      <input type="text" name="textanswer" class="form-control" value="<?php echo $row['Answer']; ?>"id="Answer" placeholder="Enter Answer">
    </div><br><br>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnup" class="btn btn-default">update</button>
       <a href="Faq.php">Back to main page</a>

    </div> </div>	
    </table> 
</form>

