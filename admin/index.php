
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 11:37:01 GMT -->
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
   
    <title>Daily Deal--Admin Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
     
</head>

<body background="logoo.jpg">

<!-- page-wrapper Start-->
<!-- <div class="page-wrapper">
    <div class="authentication-box"> -->
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
                <br><br><br><br>
               <center>
                <div class="col-md-5 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <div class="header">
    <h3 style="font-family: Elephant">Admin login</h3>
</div>
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="fa fa-sign-in" style="font-size:18px"></span>     Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="fa fa-user-plus" style="font-size:18px">    Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <form class="form-horizontal auth-form" method="post" >
                                        <div class="form-group">
                                            <input name="txt_email" required="" type="email" class="form-control" placeholder="Enter Your Email" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <input name="pass" required=""  type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <div class="form-check">
                                                  <input class="form-check-input custom-control-input" type="checkbox" value="" id="customControlAutosizing">
                                                  <label class="form-check-label" for="customControlAutosizing">Remember me</label>
                                                </div>
                                                <a href="adfor_pass.php" class="btn btn-default forgot-pass">lost your password</a>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" name="btnlog" type="submit" value="login">Login</button>
                                        </div><br><br>
                                        <div>
                                            <span>Or Sign up with social platforms</span><br><br>
                                            <ul class="social">
                                                <li><a href="#" class="fa fa-facebook-square" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-twitter" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-instagram" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-pinterest" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                            </ul>
                                        </div>
                                    </form>
                                </div>
   <?php
        $con=mysqli_connect("localhost","root","","dailydeal");
       session_start();
        if(isset($_POST['btnlog']))
        {
            $email=$_POST['txt_email'];
            $Password=$_POST['pass'];
            $q=mysqli_query($con,"select * from admin_master where email='$email' and Password='$Password'");
            $cnt=mysqli_num_rows($q);
               $row=mysqli_fetch_array($q);
        if($cnt>0)
            {
              $_SESSION['id']=$row[0];
                header("location:home.php");                 
            }
            else
            {
                echo "<script> alert('u have no access this account..');</script>";
            }   
        }
    ?>
    <?php
$con=mysqli_connect("localhost","root","","dailydeal");

if(isset($_POST['btnreg']))
  {
    $aname=$_POST['txt_aname'];
    $email=$_POST['txt_email'];
    $mobileno=$_POST['txt_mob'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $file_name=$_FILES["image"]['name'];
    $file_temp=$_FILES["image"]['tmp_name'];
  if($password==$cpassword)
    $q=mysqli_query($con,"insert into admin_master values('','$aname','$password','$email','$mobileno','$file_name')");
  if($q)
    {

      move_uploaded_file($file_temp,"adminpic/".$file_name);
      header('location:index.php');

    }
  else
    {
      echo "<script> alert('Password Donot Match...');</script>";
    }
  }
?>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <form class="form-horizontal auth-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input required="" name=txt_aname type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name=txt_email type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name=txt_mob type="tel" class="form-control" placeholder="Mobile No">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name=pass type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name="cpass" type="password" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control" placeholder="Logo">
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox form-check mr-sm-2">                                               
                                                <input class="form-check-input" type="checkbox" value="" id="customControlAutosizing1">
                                                <label class="custom-control-label form-check-label" for="customControlAutosizing1"><span>I agree all statements in <a href="#"  class="pull-right">Terms &amp; Conditions</a></span></label>
                                            </div>
                                            <!-- <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                              <label class="form-check-label" for="flexCheckDefault">
                                                Default checkbox
                                              </label>
                                            </div> -->
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" name="btnreg" type="submit">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-primary" href="../user/index.php">Back</a>
                                        </div><br><br>
                                        <div>
                                            <span>Or Sign up with social platforms</span><br><br>
                                           <ul class="social">
                                                <li><a href="#" class="fa fa-facebook-square" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-twitter" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-instagram" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                                <li><a href="#" class="fa fa-pinterest" style="font-size:44px"></a></li>&nbsp;&nbsp;
                                            </ul>
                                        </div>
                                        </div>
                                     </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
            
    </div>
</div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/slick.js"></script>

<!-- Jsgrid js-->
<script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-invoice.js"></script>
<script src="../assets/js/jsgrid/jsgrid-invoice.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
<script>
    $('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>
</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 11:37:05 GMT -->
</html>
