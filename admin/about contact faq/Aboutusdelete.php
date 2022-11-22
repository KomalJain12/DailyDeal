<?php
include('hhh.php');
?>
<?php
$Id=$_GET['x'];

		$con=mysqli_connect("localhost","root","","dailydeal");
		

$Id=$_GET['x'];
			$query=mysqli_query($con,"delete from Aboutus where Id=$Id");

		if($query)
		{
	
			echo "<script>alert('delete record'); </script>";
		}
		else
		{
			echo "Not ";
			
		}
?>
<?php
include('fff.php');
?>