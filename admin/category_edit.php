<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Add Category</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
include('hhh.php');
?>
  <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    <small>Dailydeal Admin panel</small>
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
<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Category</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Update Category</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="txt_cname" id="name" type="text" required="">
                                        </div><br><br><br><br>
                                        <div><center>
                                    <button type="submit" name="update" class="btn btn-primary d-block">Save</button></center></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
$cid=$_REQUEST['cid'];
$con = mysqli_connect("localhost","root","","dailydeal");
$q = "SELECT * from category_master where cid='".$cid."'"; 
$result = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($result);
?>

<?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$status = "";
if(isset($_POST['update']))
{
$cid=$_REQUEST['cid'];
$cname =$_REQUEST['txt_cname'];
$update=mysqli_query($conn,"update category_master set cname='$cname' where cid='$cid'");
if($update);
{
    header('location:category_view.php');
$status = "Record Updated Successfully. </br></br>
<a href='category_view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
}
?>

<?php 
include('fff.php');
?>
</body>
</html>