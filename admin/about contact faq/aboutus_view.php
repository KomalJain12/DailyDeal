<?php
include('hhh.php');
?>
<?php
    $con=mysqli_connect("localhost","root","","dailydeal");
    
  $query=mysqli_query($con,"select * from Aboutus");
 
  echo "<table border=2>";
 
  echo "<table class=table>";
  echo "<th>Title";
  echo "<th>Discription";
  echo "<th colspan=2>Action";

  while($row=mysqli_fetch_array($query))
  {
    echo "<tr>";
    echo "<td>".$row['Title'];
    echo "<td>".$row['Description'];
    
     echo "<td><a href=Aboutusupdate.php?x=$row[0]><image src='images/edit.jpg'/width='20' height='20'></a>";
    echo "<td><a href=Aboutusdelete.php?x=$row[0]><image src='images/delete.jpg'/width='20' height='20'></a>";
    
    echo "</tr>";
  }
  echo "</table>";
?>
<?php
include('fff.php');
?>