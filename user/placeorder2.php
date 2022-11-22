<?php
include('hhh.php');
session_start();
$uid=$_SESSION['uid'];
$total_order_amt=$_GET['tot'];
?>
<?php
 $conn=mysqli_connect("localhost","root","","dailydeal");
$result = mysqli_query($conn,"SELECT * FROM statetbl");
?>
<script language="javascript" type="text/javascript">

//mobile no. validation
function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    alert("Please enter only Numbers.");
    return false;
  }

  return true;
}

function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  alert("Success ");
  return true;
}
</script>
<?php
$a=mysqli_query($conn,"select * from user_master where uid=$uid");
$arow=mysqli_fetch_array($a);
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="checkout.php"><span class="fa fa-cart-arrow-down" aria-hidden="true"></span>Cart Page</a></li>
				<li class="active">Place Order Page</li>
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
                        <h3 style="position:relative; left: -17px">Shipping Details</h3>
                        <br><br>
                        <form>
                            <div class="form-group">
                                <!--<div class="col-md-6">-->
                                    <label for="name23" >Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name..." value="<?php echo $arow['name']; ?>" name="txtname" id="name23" required>
                                <!--</div>-->
                            </div>
                            <div class="form-group">
                                <label for="ctype">Shipping Address</label>
                                <textarea rows = "5" cols = "60" name = "shippingaddr" id="details" class="form-control" placeholder="Enter Shipping Address With Pincode..."  required></textarea>
                            </div>
							<div class="form-group">
                                <label for="ctype">Billing Address</label>
                                <textarea rows = "5" cols = "60" name = "billingaddr" id="details" class="form-control" placeholder="Enter Billing Address With Pincode..." required></textarea>
                            </div>
							<div class="form-group">
                        <label for="Town2" >state</label>
                        <select name="category" id="category" class="form-control" onChange="getScat(this.value)" required>
                        <option value='' disabled selected>--Select State--</option>
                          <?php
                        while($row = mysqli_fetch_array($result)) 
                        {
                        ?>
                          <option value="<?php echo $row["state_id"];?>"><?php echo $row["state_name"];?></option>
                        <?php
                        }
                        ?>
                        
                        </select>
                  </div>
                            <div class="form-group mb-3">
                         <label for="Town2" >Town / City *</label>
                          <select name="sub_category" id="sub_category" class="form-control" required>
                            <option value='' disabled selected>--Select City--</option>
                          
                          </select>
                    </div>
                   
                    <script>
                      $(document).ready(function() {
                      $('#category').on('change', function() {
                          var category_id = this.value;
                          $.ajax({
                            url: "getcity.php",
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
                            <div class="form-group">
                                <!--<div class="col-md-6">-->
                                    <label for="info2" >Email ID *</label>
                                    <input type="email" class="form-control" placeholder="Email ID..." name="email" id="info2" value="<?php echo $arow['email']; ?>" required>
                                <!--</div>-->
                                <!--<div class="col-md-6">-->
                                    <label for="info2" >Mobile Number *</label>
                                    <input type="text" name="phno" class="form-control" placeholder="Mobile Number..." id="info12" onkeypress="return isNumber(event)" value="<?php echo $arow['mobileno']; ?>" required>
                                <!--</div>-->
                            </div>
                            <br><br>    
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-6" style="padding:50px;">
                    <div class="calculate-shipping-bottom margin-top">
                        <h3 style="padding:10px;">Cart Totals</h3>
                         <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td style="padding:10px;">Cart Subtotal</td>
                                    <td style="padding:10px;"><?php echo $total_order_amt;?> Rs</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px;">Shipping Charges</td>
                                    <td style="padding:10px;">60 Rs</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;">Order Total</td>
                                    <td style="padding:10px;">
                                        <?php  
                                        $charge=$total_order_amt+60; 
                                        echo $charge;
                                        ?> Rs</td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="bleezy-payment">
                        <h3 style="padding:10px;">Payment Mode<h3>
                        <div class="payment">
                        <table>
                        <tr>
                            <td style="padding:10px;"><input type="checkbox" name="pmode" value="cash on delivery"></td>
                            <td><h4>Cod(cash on delivery)</h4></td>
                            </table>
                            <!--<img src="../user/cod.jpg" alt="credit card" />-->
                        </div>
                    </div>
                    <div class="proceed-checkout">
                        <div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" name="btncheckout" type="submit" onclick="ValidateNo();">
												<i class="ace-icon fa fa-check bigger-110"></i>
											    checkout
								</button>
						</div>
                        <?php
                        if(isset($_POST["btncheckout"]))
                        {
                            mysqli_commit($conn);
                            $full_name=$_POST['txtname'];
                            $shipadd=$_POST['shippingaddr'];
                            $billadd=$_POST['billingaddr'];
                            $state=$_POST['category'];
                            $city=$_POST['sub_category'];
                            $email=$_POST['email'];
                            $phno=$_POST['phno'];
                            if(!isset($_POST['pmode']))
                            {
                                echo '<script>alert("please select payment mode"); window.location.href("placeorder2.php?total='.$total.'");</script>';
                                exit('');
                            }
                            else{
                                $pmode=$_POST['pmode'];
                            }
                            //$pasc=$_POST['pasc'];
                            $odate=date('Y-m-d');
                            $q=mysqli_query($conn,"select * from cart where uid=$uid");
                            while($row=mysqli_fetch_array($q))
                            {
                                $qty=$row['qty'];
                                $pid=$row['pid'];
                                $q2=mysqli_query($conn,"select * from product_detail where pid=$pid");
                                $row2=mysqli_fetch_array($q2);
                                $qty2=$row2['stock'];
                                if($qty>$qty2)
                                {
                                    echo '<script>alert("product \"'.$row2['pname'].'\" quantity exceeds quantity available at seller please remove the product from the cart."); window.location.href="checkout.php";</script>';
                                    exit('');
                                }
                            }
                            $q3=mysqli_query($conn,"insert into order_master values('',$uid,'$full_name','$odate','$shipadd','$billadd',$state,$city,'$email','$phno','$charge','$pmode',0)");
                            if($q3)
                            {
                                $q4=mysqli_query($conn,"select * from order_master where uid=$uid ORDER BY order_id DESC");
                                while($row4=mysqli_fetch_row($q4)){
                                    $oid=$row4[0];
                                    break;
                                }
                                $q8=mysqli_query($conn,"select * from cart where uid=$uid");
                                while($row8=mysqli_fetch_array($q8))
                                {
                                        $vid=$row8['vid'];
                                        $curdate=$row8['currdate'];
                                        $cid=$row8['cartid'];
                                        $qty=$row8['qty'];
                                        $pid=$row8['pid'];
                                        $q2=mysqli_query($conn,"select * from product_detail where pid=$pid");
                                        $row2=mysqli_fetch_array($q2);
                                        $price=$row2['rate'];
                                        $qty2=$row2['stock'];
                                        $tamt=$qty*$price;
                                        $uqty=$qty2-$qty;

                                        $q12=mysqli_query($conn,"select * from offer where pid=$pid");
                                        $row12=mysqli_fetch_array($q12);

                                        $offer=$row12['offer'];
                                        $total=$qty*$price;
                                        $dis=$total*($offer/100);
                                        $tot=$total-$dis;
                                        $q5=mysqli_query($conn,"insert into order_detail values('',$oid,$pid,$vid,$qty,$tot,null,0,null,null,null,null)");
                                        if($q5)
                                        {
                                            $q10=mysqli_query($conn,"insert into cart_history values('',$cid,$pid,$uid,$vid,'$curdate',$qty)");
                                            if($q10)
                                            {
                                                $q6=mysqli_query($conn,"delete from cart where cartid=$cid");
                                                $q7=mysqli_query($conn,"update product_detail set stock=$uqty where pid=$pid");
                                                if($q6 && $q7)
                                                {
                                                    //echo '<script>alert("Order Succesfully Placed."); window.location.href("index.php");</script>';
                                                    mysqli_commit($conn);
                                                }
                                                else{
                                                    mysqli_rollback($conn);
                                                    echo '<script>alert("there is a problem in placing order.");</script>';
                                                    exit('');
                                                }
                                            }
                                        }
                                        else{
                                                mysqli_rollback($conn);
                                                echo '<script>alert("there is a problem 2 in placing order.");</script>';
                                                exit('');
                                            }
                                }
                            }
                            else{
                                mysqli_rollback($conn);
                                echo '<script>alert("there is a problem 3 in placing order.");</script>';
                                exit('');
                            }
                            echo '<script>alert("Order Succesfully Placed."); window.location.href="index.php";</script>';
                        }
                        ?>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

</div>
<?php
include('fff.php');
?>