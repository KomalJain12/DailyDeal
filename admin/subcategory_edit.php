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
                                <h3>SubCategory
                                    <small>Dailydeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">SubCategory</li>
                                <li class="breadcrumb-item active">Edit SubCategory</li>
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
                                <h5>Edit SubCategory</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Update SubCategory</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="sname" id="name" type="text">
                                        </div><br><br><br><br>
                                         <div class="col-xl-3 col-md-4">
                                        <label><span>*</span>Upload Photo</label>    
                                        </div>
                                        <div class="col-md-8">
                                          <input class="form-control" name="image" type="file">
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
$sid=$_REQUEST['sid'];
$con = mysqli_connect("localhost","root","","dailydeal");
$q = "SELECT * from subcategory_detail where sid='".$sid."'"; 
$result = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($result);
?>

<?php
$con = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
if(isset($_POST['update']))
{
$sid=$_REQUEST['sid'];
$sname =$_REQUEST['sname'];
$file_name=$_FILES["image"]['name'];
$file_temp=$_FILES["image"]['tmp_name'];
$update=mysqli_query($con,"update subcategory_detail set sname='$sname',image='$file_name' where sid='$sid'");
if($update)
{
    move_uploaded_file($file_temp,"subcatpic/".$file_name);
    header('location:subcategory_view.php');
    echo "<script> alert('Added Successfully');</script>";
}
}
?>
<?php 
include('fff.php');
?>