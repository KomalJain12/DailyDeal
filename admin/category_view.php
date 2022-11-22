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
                                <h3>View Category
                                  <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Category</li>
                                <li class="breadcrumb-item active">View Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="category.php">Add New Category</a>
<center><strong><h2>View Records</h2></strong></center><br><br><br>
<!-- <div class="container">
    <div class="col-md-3">
        <form action="" method="POST">
            <div class="input-group add-on">
                <div class="form-group">
                    <input type="text" name="cname" class="form-control" id="email" placeholder="search here..">
                </div>
                <div class="input-group-btn">
                    <input type="submit" name="search" class="btn btn-primary" value="search">
                </div>
            </div>
        </form>
    </div>
</div> -->
<div class="w3l_search">
            <form action="#" method="post">
                <input type="search" name="cname" placeholder="Search here..." required="">
                <button type="submit" class="btn btn-default search" name="search" aria-label="Right Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>
</p>
<?php
$conn = mysqli_connect("localhost","root","","dailydeal");

if(isset($_POST['search']))
{
    $cname = $_POST['cname'];
    $q=mysqli_query($conn,"Select * from category_master where cid ='$cname' or cname='$cname' or image='$cname'"); 
    while ($row=mysqli_fetch_array($q)) 
    {
       $cid=$row['cid'];
        $image=$row['image'];
        $cname=$row['cname'];
        
?>
<table>
    <tr>
        <th>S.NO</th>
        <th>Image</th>
        <th>Category Name</th>
        <th>action</th>
    </tr>
    <tbody>
  <tr>
      <td><?php echo $cid; ?></td>
      <td><?php echo $image; ?></td>
      <td><?php echo $cname; ?></td>
      

<td>
<a href="category_edit.php?cid=<?php echo $row["cid"]; ?>"><big><big><i class="fa fa-pencil" aria-hidden="true"></i></a>
</td>
<td>
<a href="category_delete.php?cid=<?php echo $row["cid"];?>" onclick='return checkdelete ()'><big><big><i class="fa fa-trash-o" aria-hidden="true"></i></a>
</td>
  </tr>
  </tbody>
</table>
<?php }} ?>
</div>

<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th id ="r1" scope="row"><strong>S.No</strong></th>
<th scope="row"><strong>Image</strong></th>
<th scope="row"><strong>Category Name</strong></th>
<th colspan="2" scope="row"><strong>action</strong></th>
</tr>
</thead>
<tbody>

<?php
//error_reporting();
$conn = mysqli_connect("localhost","root","","dailydeal");
?>

<?php
$q="Select * from category_master;";
$result = mysqli_query($conn,$q);

while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row['cid']; ?></td> 
<td><img src='catpic/<?php echo $row['image']; ?>' height="50" width="100"></td>   
<td><?php echo $row['cname']; ?></td>
<td>
<a href="category_edit.php?cid=<?php echo $row["cid"]; ?>"><big><big><i class="fa fa-pencil" aria-hidden="true"></i></a>
</td>
<td>
<a href="category_delete.php?cid=<?php echo $row["cid"]; ?>" onclick='return checkdelete ()'><big><big><i class="fa fa-trash-o" aria-hidden="true"></i><big><big></a>
</td>
</tr>
<?php  
} 
?>
</tbody>
</table>
<script>
function checkdelete()
{
    return confirm('are you sure you want to remove this category?');
}
</script>
<?php 
include('fff.php');
?>
</div>
</body>
</html>