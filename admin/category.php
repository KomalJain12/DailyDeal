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
                                <h3>Category
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Category</li>
                                <li class="breadcrumb-item active">Add Category</li>
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
                                <h5>Add Category</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Cateory Name</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="txt_cname" id="name" type="text" required="">
                                        </div><br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="col-xl-3 col-md-4">
                                        <label><span>*</span>Upload Photo</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="image" type="file" required="">
                                        </div>
                                    </div>
                                    <button type="submit" name="btninsert" class="btn btn-primary d-block">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 <?php
//error_reporting(1);
$con=mysqli_connect("localhost","root","","dailydeal");

if(isset($_POST['btninsert']))
  {
    $cname=$_POST['txt_cname'];
    $file_name=$_FILES["image"]['name'];
    $file_temp=$_FILES["image"]['tmp_name']; 
    
    $q=mysqli_query($con,"insert into category_master values('','$cname','$file_name')");

    if($q)

    {
        move_uploaded_file($file_temp,"catpic/".$file_name);
        echo "<script> alert('Added Successfully');</script>";
    }
  }
?>
    </form>
    </section>
    
<?php
include("fff.php");
?>
      </div>
    </div>
</section>
</body>
</html>