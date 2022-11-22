<?php 
include('head.php');
?>
<?php
 $con=mysqli_connect("localhost","root","","dailydeal");
$result = mysqli_query($con,"SELECT * FROM category_master");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Add Listings</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home">Home</i></a></li>
                                <li class="breadcrumb-item active">Listings</li>
                                <li class="breadcrumb-item active">Add Listings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <center><h2 class="tm-block-title d-inline-block">Add Product</h2></center>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                   <div class="form-group mb-3">
                        <label for="sel1">Category</label>
                        <select name="category" id="category">
                        <option value="">Select Category</option>
                          <?php
                        while($row = mysqli_fetch_array($result)) 
                        {
                        ?>
                          <option value="<?php echo $row["cid"];?>"><?php echo $row["cname"];?></option>
                        <?php
                        }
                        ?>
                        
                        </select>
                  </div>
                  <div class="form-group mb-3">
                         <label for="sel1">Sub Category</label>
                          <select name="sub_category" id="sub_category">
                            <option value="">Select SubCategory</option>
                          
                          </select>
                    </div>
                    <script>
                      $(document).ready(function() {
                      $('#category').on('change', function() {
                          var category_id = this.value;
                          $.ajax({
                            url: "get_subcat.php",
                            type: "POST",
                            data: {
                              category_id: category_id
                            },
                            cache: false,
                            success: function(dataResult){
                              $("#sub_category").html(dataResult);
                            }
                          });
                      });
                    });
                    </script>
                  <div class="form-group mb-3">
                    <label for="pname">Product Title</label>
                    <input id="pname" name="pname" type="text" class="form-control validate" required>
                  </div>
                   <div class="form-group mb-3">
                    <label for="name">Product SKU</label>
                    <input id="sku" name="sku" type="text" class="form-control validate" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control validate" rows="3" required></textarea>
                  </div>
                 
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="rate">Rate
                          </label>
                          <input id="rate" name="rate" type="text" class="form-control validate" data-large-mode="true" />
                        </div>
                         <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="mrp">MRP
                          </label>
                          <input id="mrp" name="mrp" type="text" class="form-control validate" data-large-mode="true" />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="stock">Units In Stock </label>
                          <input id="stock" name="stock" type="text" class="form-control validate" required/>
                        </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="image">Upload Image</label>
                  <input id="image" class="form-control validate" type="file" name="image"> 
                </div>
                <center><div class="form-group mb-3">
                <p><input name="btninsert" class="btn btn-primary d-block" value="Insert" type="submit" /></p>
              </div></center>
              </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 <?php 
 $con=mysqli_connect("localhost","root","","dailydeal");
?>
<?php
if(isset($_POST['btninsert']))
  {
    $sid=$_POST['sub_category'];
    $pname=$_POST['pname'];
    $sku=$_POST['sku'];
    $description=$_POST['description'];
    $rate=$_POST['rate'];
    $mrp=$_POST['mrp'];
    $stock=$_POST['stock'];
    $file_name=$_FILES["image"]['name'];
    $file_temp=$_FILES["image"]['tmp_name']; 
    
    echo "insert into product_detail values('',$sid,'$pname','$sku','$description','$rate','$mrp','$stock','$file_name')";


    $q=mysqli_query($con,"insert into product_detail values('',$sid,'$pname','$sku','$description','$rate','$mrp','$stock','$file_name')");
    

    if($q)

    {
        move_uploaded_file($file_temp,"images/".$file_name);
        echo "<script> alert('Added Successfully');</script>";
    }
  }
?>
<?php
include("foot.php");
?>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
</body>
</html>