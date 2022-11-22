
<?php 
error_reporting(1);
include('head.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Products</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>

 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Update Product
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item">Listings</li>
                                <li class="breadcrumb-item active">View Listings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="p.php">Add New Listings</a> 
<center><strong><h2>Update Products</h2></strong></center><br><br><br>
<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
     <form class="needs-validation" method="post" enctype="multipart/form-data">
<thead>
<tr>
<!--<th scope="row"><strong>SubCategory Name</strong></th>-->
<th><strong>Product Name</strong></th>
<th><strong>SKU</strong></th>
<th><strong>Description</strong></th>
<th><strong>Rate</strong></th>
<th><strong>MRP</strong></th>
<th><strong>Stock</strong></th>
<th><strong>Image</strong></th>
<th>UPDATE</th>
</tr>
</thead>
<tbody>
    <?php
$con = mysqli_connect("localhost","root","","dailydeal");
?>
    <?php
$pid=$_REQUEST['pid'];
$con = mysqli_connect("localhost","root","","dailydeal");
$q = "SELECT * from product_detail where pid='".$pid."'"; 
$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result);
?>
    <tr>
        <!--<td><input name="sname" id="sname" type="text"></td>-->
        <td><input name="pname" id="pname" type="text" value="<?php echo $row['pname']?>"></td>
        <td><input name="sku"  id="sku" type="text" value="<?php echo $row['sku']?>"></td>
        <td><textarea name="description" id="description" ></textarea></td>
        <td><input name="rate" size="3" id="rate" type="text" value="<?php echo $row['rate']?>"></td>
        <td><input name="mrp" size="3" id="mrp" type="text" value="<?php echo $row['mrp']?>"></td>
        <td><input name="stock" size="3" id="stock" type="text" value="<?php echo $row['stock']?>"></td>
        <td><input name="image" id="image" type="file"></td>
        <td><button type="submit" name="update" class="btn btn-primary d-block" >OK</button></td>
  



<?php
if(isset($_POST['update']))
{
 $pname=$_REQUEST['pname'];
$sku=$_REQUEST['sku'];
$description=$_REQUEST['description'];
$rate=$_REQUEST['rate'];
$mrp=$_REQUEST['mrp'];
$stock=$_REQUEST['stock'];
$file_name=$_FILES["image"]['name'];
$file_temp=$_FILES["image"]['tmp_name']; 
$update=mysqli_query($con,"update product_detail set pname='$pname',sku='$sku',description='$description',rate=$rate,mrp=$mrp,stock=$stock,pimage='$file_name' where pid=$pid");
if($update)
    {
        header('location:product_view.php');
        move_uploaded_file($file_temp,"images/".$file_name);
        echo "<script> alert('Updated Successfully');</script>";
    }
    else
    {
        echo "<script>alert ('Not Updated')</script>";
    }
}
?>
</tr>
</tbody>
</form>
</table>
<?php 
include('foot.php');
?>
</body>
</html>
