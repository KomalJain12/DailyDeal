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
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
 <div class="card">
    <div class="card-header">
        <center><h3>View Users</h3></center>
    </div>
        <div class="card-body">
                                <!-- <div class="user-status table-responsive latest-order-table"> -->
<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th id ="r1" scope="row"><strong>User ID</strong></th>
<th scope="row"><strong>User Name</strong></th>
<th scope="row"><strong>Mobile No</strong></th>
<th scope="row"><strong>Email</strong></th>
<th scope="row"><strong>Password</strong></th>
</tr>
</thead>
<tbody>

<?php
error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from user_master";
$result = mysqli_query($conn,$q);
$row=mysqli_fetch_array($q);
while($row = mysqli_fetch_assoc($result)) 
{
?>
<tr>
<td><?php echo $row['uid']; ?></td>    
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['mobileno']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- </div> -->
<?php 
include('fff.php');
?>
</body>
</html>