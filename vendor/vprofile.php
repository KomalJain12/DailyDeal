<?php
error_reporting(1);
session_start();
include('head.php');
?>
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

 <div class="container-fluid">
                <div class="row">
                    <center>
                    <div class="col-xl-8">
                        <div class="card">
                                      <div class="card-body">
                                        <?php
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php

$vid=$_SESSION['id'];
$q="Select * from vendor_master where vid=$vid";
$result = mysqli_query($conn,$q);
while($row = mysqli_fetch_array($result)) 
        {

            ?>
                  <div class="tab-content" id="top-tabContent">
                                <div class="profile-details text-center">
                                    <h3 class="f-w-600 mb-0"><?php echo $row['vname'];?></h3><br>
                                    <img src='../vendor/venpic/<?php echo $row['image']; ?>' style="width: 30%; height: auto;"><br>
                                    
                                                                  
                               <!--  <hr> -->
                              
                            <!-- <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab"> -->
                                        <center><h4 class="f-w-600">Profile</h4></center><br>
                                        
                                        <div class="table-responsive profile-table">
                                            <table class="table table-responsive">
                                                <tbody>
                                                <tr>
                                                    <td>Admin Name</td>
                                                    <td><?php echo $row['vname'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td><?php echo $row['email'];?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Mobile Number:</td>
                                                    <td><?php echo $row['mobileno'];?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Location:</td>
                                                    <td>India</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <div class="social">
                                        <div class="form-group btn-showcase">
                                            <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                            <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-twitter"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <?php
            
        
}

?>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>
                
                
   

<!-- <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script> -->
<?php
include('foot.php');
?>