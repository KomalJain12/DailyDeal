<?php
error_reporting(1); 
session_start();
include('head.php');
?>
<!DOCTYPE html>
<html>
<head>

	<title>Offer</title>
</head>
<body>
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Product
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item">Offers</li>
                                <li class="breadcrumb-item active">Add Offers</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p>> 
<center><form method="POST">
	<div class="form-group mb-3">
                        <label for="sel1">Product</label>
                        <select name="pname" id="category">
                        <option value="">Select Product</option>
                          <?php
             $q=mysqli_query($con,"select * from product_detail");
                while($row=mysqli_fetch_array($q))
                    {
                      echo "<option value=$row[pid]>".$row['pname']."</option>";
                    }
                   ?>
                </select>
                  </div>
                  <br>
     <div class="form-group mb-3">
     <label for="name" ><span>*</span>Offer</label>    
     <input id="name" name="offer" type="text" required>
 	</div>

 	<div class="form-group mb-3">
     <label for="name" ><span>*</span>Exdate</label>    
	 <input type="date" name="exdate" id="exdate" onchange="TDate()" required />
    </div>
    <div class="form-group mb-3">
     <label for="name" ><span>*</span>Time</label>    
     <input id="timee" name="timee" type="Time" required>
  </div>
	 <script>
	function TDate()
	 {
var UserDate = document.getElementById("exdate").value;
var ToDate = new Date();
  
if (new Date(UserDate).getTime() <= ToDate.getTime()) {
    alert("The Date must be Bigger or Equal to today date");
    return false;
}
return true;}
</script>
<br>
 <center><div class="form-group mb-3">
<p><input name="btninsert" class="btn btn-primary d-block" name="btninsert" type="submit" /></p>
</div></center>
	

	<?php
	$con=mysqli_connect("localhost","root","","dailydeal");
	?>
	<?php

	if(isset($_POST['btninsert']))
  {
    $vid=$_SESSION['id'];
    $pid=$_POST['pname'];
    $offer=$_POST['offer'];
    $exdate=$_POST['exdate'];
    $timee=$_POST['timee'];
  
    $q=mysqli_query($con,"insert into offer values('','$pid','$offer','$exdate','$timee')");

    if($q)

    {
    	echo "<script> alert('Added Successfully');</script>";
    }
  }
?>
            </form></center>
        </div>
            
<?php
  include('foot.php');
?>
</body>
</html>