<?php
include('hdx.php');
?>
<?php

$con=mysqli_connect("localhost","root","","online_forum");

if(isset($_POST['btnins']))
{

	$Question=$_POST['textquestion'];
	$Answer=$_POST['textanswer'];

$q=mysqli_query($con,"insert into FAQ values('','$Question','$Answer')");
if($q)
 	echo "inserted";
 else
 	echo "not";
}
?>
<form method="POST">
<form class="form-horizontal" action="/action_page.php" >

<div class="form-group">
    <label class="control-label col-sm-1" for="Question">Question:</label>
    <div class="col-sm-5">
      <input type="text" name="textquestion" class="form-control" id="Question" placeholder="Enter Question">
    </div><br><br>

    <div class="form-group">
    <label class="control-label col-sm-1" for="Answer">Answer:</label>
    <div class="col-sm-5">
      <input type="text" name="textanswer" class="form-control" id="Answer" placeholder="Enter Answer">
    </div><br><br>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnins" class="btn btn-default">Insert</button>
    </div> </div>
    </table> 
</form>
<?php
    $con=mysqli_connect("localhost","root","","online_forum");
    
  $q=mysqli_query($con,"select * from FAQ");
  echo "<table border=2>";
  echo "<h1>Contactus</h1>";
  echo "<table class=table>";
  echo "<th>Question";
  echo "<th>Answer";
  echo "<th colspan=2>Action";

  while($row=mysqli_fetch_array($q))
  { 
    echo "<tr>";
    echo "<td>".$row['Question'];
    echo "<td>".$row['Answer'];
    

    echo "<td><a href=Faqupdate.php?x=$row[0]><image src='images/edit.jpg'/width='20' height='20'></a>";
    echo "<td><a href=Faqdelete.php?x=$row[0]><image src='images/delete.jpg'/width='20' height='20'></a>";
    
    echo "</tr>";
  }
  echo "</table>";
?>
<?php
include('fff.php');
?>
