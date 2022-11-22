<?php
include('hdx.php');
?>
<?php
$con=mysqli_connect("localhost","root","","online_forum");

if(isset($_POST['btnins']))
{
	$Name=$_POST['textname'];
	$Email=$_POST['textemail'];
	$PhoneNo=$_POST['textphoneno'];

$q=mysqli_query($con,"insert into Contactus values('','$Name','$Email','$PhoneNo')");
if(q)
 	echo "inserted";
 else
 	echo "not";
}
?>
<form method=post>
<form class="form-horizontal" action="/action_page.php" >
<div class="form-group">
    <label class="control-label col-sm-1" for="Name">Name:</label>
    <div class="col-sm-5">
      <input type="text" name="textname" class="form-control" id="Name" placeholder="Enter Name">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="Email">Email:</label>
    <div class="col-sm-5">
      <input type="text" name="textemail" class="form-control" id="Email" placeholder="Enter Email">
    </div><br><br>

<div class="form-group">
    <label class="control-label col-sm-1" for="PhoneNo">PhoneNo:</label>
    <div class="col-sm-5">
      <input type="text" name="textphoneno" class="form-control" id="PhoneNo" placeholder="Enter PhoneNo">
    </div><br><br>

<div class="form-group">
    <div class="col-sm-offset-1" col-sm-10">
      <button type="submit" name="btnins" class="btn btn-default">Insert</button>
    </div> </div>
    </table> 
</form>
<?php
    $con=mysqli_connect("localhost","root","","online_forum");
    
  $query=mysqli_query($con,"select * from Contactus");
  echo "<table border=2>";
  echo "<h1>Contactus</h1>";
  echo "<table class=table>";
  echo "<th>ID";
  echo "<th>Name";
  echo "<th>Email";
  echo "<th>PhoneNo";
  echo "<th colspan=2>Action";

  while($row=mysqli_fetch_array($query))
  {
    echo "<tr>";
    echo "<td>".$row['ID'];
    echo "<td>".$row['Name'];
    echo "<td>".$row['Email'];
    echo "<td>".$row['PhoneNo'];

    echo "<td><a href=Contactusupdate.php?x=$row[0]><image src='images/edit.jpg'/width='20' height='20'></a>";
    echo "<td><a href=Contactusdelete.php?x=$row[0]><image src='images/delete.jpg'/width='20' height='20'></a>";
    
    echo "</tr>";
  }
  echo "</table>";
?>
<?php
include('fff.php');
?>
