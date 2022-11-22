<html>
<head>
<?php 
include('hhh.php');
?>
</head>
<body>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View SubCategory
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">SubCategory</li>
                                <li class="breadcrumb-item active">View SubCategory</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="subcategory.php">Add New SubCategory</a> 
<center><strong><h2>View Records</h2></strong></center><br><br><br>
<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Category Name</strong></th>
<th scope="row"><strong>SubCategory Name</strong></th>
<th scope="row"><strong>Image</strong></th>
<th colspan="2" scope="row"><strong>Action</strong></th>
</tr>
</thead>
<tbody>

<?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select sd.*,c.* from category_master c,subcategory_detail sd where c.cid=sd.cid ORDER BY sid desc;";
$result = mysqli_query($conn,$q);

while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><img src='subcatpic/<?php echo $row['simage']; ?>' height="50" width="100"></td>
<td>
<a href="subcategory_edit.php?sid=<?php echo $row["sid"]; ?>"><big><big><i class="fa fa-pencil" aria-hidden="true"></i></big></big></a>
</td>
<td>
<a href="subcategory_delete.php?sid=<?php echo $row["sid"];?>" onclick='return checkdelete ()'><big><big><i class="fa fa-trash-o" aria-hidden="true"></i><big><big></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
function checkdelete()
{
    return confirm('Are you sure to remove this subcategory?');
}
</script>
<?php 
include('fff.php');
?>
</body>
</html>