<html>
<head>
<?php 
include('hhh.php');
?>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Vendors
                                    <small>Dailydeal Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"></li>
                                <li class="breadcrumb-item active">Vendors List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th id ="r1" scope="row"><strong>S.No</strong></th>
<th scope="row"><strong>Vendor Name</strong></th>

<th scope="row"><strong>Email Id</strong></th>
<th scope="row"><strong>Contact No</strong></th>

<th scope="row"><strong>Status</strong></th>
<th scope="row"><strong>Accept</strong></th>
<th scope="row"><strong>action</strong></th>
</tr>
</thead>
<tbody>

<?php

$conn = mysqli_connect("localhost","root","","dailydeal");
?>

<?php
$q="Select * from vendor_master where status=0";
$result = mysqli_query($conn,$q);
if(isset($_POST['delete']))
{
    echo "deleted";
}
else
{
    echo "not possible";
}
while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row['vid']; ?></td>    
<td><?php echo "<a href=vendor_detail.php?x=$row[0]>";?><?php echo $row['vname']; ?></a></td>

<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobileno']; ?></td>

<td><?php if($row['status']==0)
 
    $ad="Deactive";
    else
        $ad="Active"; 
    echo $ad; ?>
<td>
<a href="vendor_status_update.php?vid=<?php echo $row["vid"]; ?>" onclick='return checkdelete ()'><button type="button" class="btn btn-success" name="delete"> Confirm </button></a>
</td>
<td>
<a href="vendor_delete.php?vid=<?php echo $row["vid"]; ?>"  onclick='return cnfdelete ()'><!-- <big><big><i class="fa fa-trash-o" aria-hidden="true"></i><big><big> --><button type="button" class="btn btn-primary" name="delete"> DELETE </button></a>
</td>
</tr>
<?php 
 } ?>
</tbody>
</table>
</div>
<script>
function checkdelete()
{
    return confirm('are you sure you to Accept vendor request?');
}
</script>
<script>
function cnfdelete()
{
    return confirm('are you sure you want to remove this vendor?');
}
</script>
<?php 
include('fff.php');
?>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
</body>
</html>