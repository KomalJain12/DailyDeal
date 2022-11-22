<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head>
<body>
<?php
  include('hhh.php');
?>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>About us
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Settings</li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid" >
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>About Us</h5>
                            </div>
                            <div class="card-body" >
                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Title</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="texttitle" id="name" type="text" required="" placeholder="Enter Title">
                                        </div><br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Description</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" textarea name=t1 id=t1 required="" placeholder="Enter Description">
                                        </div>>
                                    </div>
                                    <button type="submit" name="btnin" class="btn btn-primary d-block">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
//error_reporting(0);
$con=mysqli_connect("localhost","root","","dailydeal");
if(isset($_POST['btnins']))
{
  $Title=$_POST['texttitle'];
  $Description=$_POST['t1'];
  $query=mysqli_query($con,"insert into Aboutus values('','$Title','$Description')");
  if($query)
    echo "inserted";
  else
    echo "not inserted";
}
?>
<script>
         CKEDITOR.replace( 't1' );
 </script>
<?php
  include('fff.php');
?>
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
</body>
</html>



