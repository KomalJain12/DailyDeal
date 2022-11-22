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
                                
                                <li class="breadcrumb-item">SubCategory</li>
                                <li class="breadcrumb-item active">Add SubCategory</li>
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
                                <h5>Add Subcategory</h5>
                            </div>
                            <div class="card-body">
                                <form class="form" method="post"  id="form" name="form" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>Select Category</label>
                                        </div>
                                        <div class="col-md-8">
                                           <p class="bg">
                                             <select class="form-control form-control-sm" id="ccat" name="ccat"  >
                                            <option value="">-- Select Category --</option>
                                                           <?php
                                                           $q=mysqli_query($con,"select * from category_master");
                                                             while($row=mysqli_fetch_array($q))
                                                             {
                                                                  echo "<option value=$row[0]>".$row[1]."</option>";
                                                             }
                                                             ?>
                                            </select>
                                           </p>
                                        </div>
                                        <br><br><br>
                                        <div class="col-xl-3 col-md-4">
                                            <label for="name" ><span>*</span>SubCategory Name</label>    
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="txt_sname" id="name" type="text" required="">
                                        </div><br><br><br>
                                        <div class="col-xl-3 col-md-4">
                                        <label><span>*</span>Upload Photo</label>    
                                        </div>
                                        <div class="col-md-8">
                                          <input class="form-control" name="image" type="file" accept="image/*" onchange="loadFile(event)">
                                                <img id="output"/ height="150" width="200">
                                                <script>
                                                  var loadFile = function(event) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(){
                                                      var output = document.getElementById('output');
                                                      output.src = reader.result;
                                                    };
                                                    reader.readAsDataURL(event.target.files[0]);
                                                  };
                                                </script>
                                        </div>
                                    </div>
                                    <button type="submit" name="btninsert" class="btn btn-primary d-block">Insert</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
//error_reporting(1);

$con = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
if(isset($_POST['btninsert']))
  {
    $cid=$_POST['ccat'];
    $sname=$_POST['txt_sname'];
    $subname=str_replace("'","\'",$sname);
     $file_name=$_FILES["image"]['name'];
    $file_temp=$_FILES["image"]['tmp_name']; 
/*echo "insert into subcategory_detail value('','$cid','$subname','$file_name'";*/
    $q=mysqli_query($con,"insert into subcategory_detail value('','$cid','$subname','$file_name')");
   

    if($q)
    {
        move_uploaded_file($file_temp,"subcatpic/".$file_name);
        echo "<script> alert('Added Successfully');</script>";
    }
  }
?>
<?php 
include('fff.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script  src="./function.js"></script>
</body>
</html>



