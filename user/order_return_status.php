<?php
include('hhh.php');
session_start();
$uid=$_SESSION['uid'];
$abid=$_GET['order_detail_id'];
?>
<?php
$conn=mysqli_connect("localhost","root","","dailydeal");

?>
<?php
$a=mysqli_query($conn,"select * from user_master where uid=$uid");
$arow=mysqli_fetch_array($a);
$full_name=$arow['name'];
$email=$arow['email'];
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="order_history_user.php"><span class="fa fa-cart-arrow-down" aria-hidden="true"></span>Your Orders</a></li>
				<li class="active">Return Page</li>
			</ol>
		</div>
</div>
<form class="form-horizontal" role="form" name="form1" method="post" enctype="multipart/form-data">
    <section class="bleezy-checkout-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="bleezy-checkout-form checkout-form-right">
                    <br><br>
                        <h3 style="position:relative; left: -17px">Return Details</h3>
                        <br><br>
                        <form method="POST">
                            <div class="form-group">
                                <!--<div class="col-md-6">-->
                                    <label for="name23" >Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name..." value="<?php echo $arow['name']; ?>" name="txtname" id="name23" required>
                                <!--</div>-->
                            </div>
                            <div class="form-group">
                                <label for="ctype">Return Reason</label>
                                <textarea rows = "5" cols = "60" name = "reason" id="details" class="form-control" placeholder="Enter Reason For returning product"  required></textarea>
                            </div>
                            <div class="form-group">
                                <!--<div class="col-md-6">-->
                                    <label for="info2" >Email ID *</label>
                                    <input type="email" class="form-control" placeholder="Email ID..." name="email" id="info2" value="<?php echo $arow['email']; ?>" required>
                                </div>
                                 <div class="form-group">
                                    <label for="info2" >Mobile Number *</label>
                                    <input type="text" name="phno" class="form-control" placeholder="Mobile Number..." id="info12" value="<?php echo $arow['mobileno']; ?>" required>
                                <!--</div>-->
                            </div>
                            <br><br>    
                        </form>

                    </div>
                </div>
                <div class="col-md-6" style="padding:50px;">
                    
                    
                    </div>
                    <div class="proceed-checkout">
                        <div class="col-md-offset-3 col-md-9">
							 <button class="btn btn-info" name="btnreturn" type="submit" onclick="ValidateNo();">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Place Return
                                </button>
                                <br><br><br><br><br>	
						</div>
                        
                        <?php
                        if(isset($_POST["btnreturn"]))
                        {
                            mysqli_commit($conn);
                            $reason=$_POST['reason'];
                            $rdate=date('Y-m-d');
                            $q=mysqli_query($conn,"select * from order_detail where order_detail_id=$abid ");
                            $row=mysqli_fetch_array($q);
                            $pid=$row['pid'];
                            $oid=$row['order_id'];
                            $q2=mysqli_query($conn,"insert into order_return_master values('',$uid,'$pid','$abid','$rdate','$reason',0)");
                            if($q2)
                            {
                                $del=mysqli_query($conn,"update order_detail set status=5 where order_detail_id=$abid");
                                if($del)
                                {
                                 mail("$email","Welcome to Daily Deal","Thank you for shopping with Us.
                                Your Return Request for Order No: # $oid has been .Your payment will be refunded in your account.
                                If you have any queries contact us on 
                                Email: dailydeal325@gmail.com 
                                PH No: 9081881584 
                                Keep Shopping With Us :)","Hello $full_name");
                                }
                                else
                                {
                                    mysqli_rollback($conn);
                                echo '<script>alert("there is a problem 3 in placing order.");</script>';
                                exit('');

                                }
                            
                            }
                            else
                            {
                                echo '<script>alert("there is a problem  in placing return.");</script>';
                            }
                            echo '<script>alert("Return Placed Successfully"); window.location.href="order_history_user.php";</script>';
                        }
                        ?>


						
                         
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</form>


<?php
include('fff.php');
?>