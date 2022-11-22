<?php 
error_reporting(1);
session_start();
include('head.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> View Products</title> 
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
                                <h3>View Product
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active">Listings</li>
                                <li class="breadcrumb-item active">View Listings </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="p.php">Add New Listings</a> 
<center><strong><h2>View Records</h2></strong></center><br><br><br>



<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Category Name</strong></th>
<th scope="row"><strong>SubCategory Name</strong></th>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>SKU</strong></th>
<th scope="row"><strong>Description</strong></th>
<th scope="row"><strong>Rate</strong></th>
<th scope="row"><strong>Unit of Stock</strong></th>
<th scope="row"><strong>Photo</strong></th>
<th colspan="2" scope="row"><strong>action</strong></th>
</tr>
</thead>
<tbody>

<?php
//error_reporting(1);
$con = mysqli_connect("localhost","root","","dailydeal");
?>

<?php
$vid=$_SESSION['id'];
$q="Select c.*,sd.*,p.* from category_master c,subcategory_detail sd,product_detail p where c.cid=sd.cid and sd.sid=p.sid and vid=$vid order by pid desc";

$result = mysqli_query($con,$q);

while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['pname']; ?></td>
<td><?php echo $row['sku']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['rate']; ?></td>
<td><?php echo $row['stock']; ?></td>
<td><img src='images/<?php echo $row['pimage']; ?>'  width="50"></td>
<td>
<a href="product_edit.php?pid=<?php echo $row["pid"]; ?>"><big><big><i class="fa fa-pencil" aria-hidden="true"></i></big></big></a>
</td>
<td>
<a href="product_delete.php?pid=<?php echo $row["pid"]; ?>" onclick='return product_delete ()'><big><big><i class="fa fa-trash-o" aria-hidden="true"></i><big><big></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
function product_delete()
{
    return confirm('Are You Sure You Want To Remove This Product?');
}
</script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
</body>
</html>
<?php 
include('foot.php');
?>