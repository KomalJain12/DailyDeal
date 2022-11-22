<?php 
include('hhh.php');
?>
<html>
<head>

</head>
<body>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Contact Us
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Settings</li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

    <div class="form">

<div class="card-header">
    <center><h3 style="background-color: #000000; color: #ffffff; padding: 15px;">Messages</h3></center>
</div><br>
<div class="row">
<?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from contact_us;";
$result = mysqli_query($conn,$q);

while($row = mysqli_fetch_array($result)) 
{
?>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="card-body">
        <big><a href="message_del.php?id=<?php echo $row["id"];?>"><i class="fa fa-window-close" aria-hidden="true" style="text-align-last:left; "></i></a></big>
        </div>
<center><h5><i class="fa fa-user" aria-hidden="true"></i> &nbsp;&nbsp;<label></b>Name :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?></h5><br>

<h5><label><b>Email :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email']; ?></h5><br>


<h5><label> <b>Message :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['message']; ?></h5><br>


<h5><label><b>Status :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['status']==0)

 
    $ad="Unread <i class='fa fa-times' aria-hidden='true'></i>";
    else
        $ad="Read <i class='fa fa-check' aria-hidden='true'></i>"; 
    echo $ad; ?></h5><br>

<h5><label><b>Check :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="msg_status_update.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-check" aria-hidden="true"> Check </i></a></h5><br>
</center></div>
    </div>
  </div>
<?php 
} 
?>
</div></div>

    <!-- </div> 
</div> -->
   </body>
</html>                 
<?php 
include('fff.php');
?>
