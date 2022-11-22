<?php 
error_reporting(1);
session_start();
include('head.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> View Products</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>

 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>View Product
                                </h3>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="home.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Offers</li>
                                <li class="breadcrumb-item active">View Offers </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="offer.php">Add New Offers</a> 
<center><strong><h2>View Records</h2></strong></center><br><br><br>



<table class="table table-hover" width="100%" border="1" style="border-collapse:collapse;"  id='table-4'>
<thead>
<tr>
<th scope="row"><strong>Product Name</strong></th>
<th scope="row"><strong>Product Image</strong></th>
<th scope="row"><strong>Offer</strong></th>
<th scope="row"><strong>Offer Date</strong></th>
<th scope="row"><strong>Offer Time</strong></th>
<th scope="row"><strong>Offer Delete</strong></th>
</tr>
</thead>
<tbody>

<?php
//error_reporting(1);
$con = mysqli_connect("localhost","root","","dailydeal");
$curdate=date('Y-m-d h:i:s');
$d="DELETE FROM `offer` WHERE pid=$pid and exdate<'$curdate'";
mysqli_query($con,$d);
?>

<?php
$vid=$_SESSION['id'];
$q="Select p.*,o.* from product_detail p,offer o where p.pid=o.pid and vid=$vid order by oid";
$result = mysqli_query($con,$q);
while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row['pname']; ?></td>
<td><img src='images/<?php echo $row['pimage']; ?>'  width="80" height="80"></td>
<td><?php echo $row['offer']; ?></td>
<td><?php echo $row['exdate']; ?></td>
<td><?php echo $row['time']; ?></td>

<td>
<a href="vendor_delete.php?vid=<?php echo $row["vid"]; ?>"  onclick='return cnfdelete ()'><!-- <big><big><i class="fa fa-trash-o" aria-hidden="true"></i><big><big> --><button type="button" class="btn btn-primary" name="delete"> DELETE </button></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
function cnfdelete()
{
    return confirm('Are you Sure to delete offer ?');
}
</script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
</body>
</html>
<?php 
include('foot.php');
?>