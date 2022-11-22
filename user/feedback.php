<!DOCTYPE html>
<?php
include('hhh.php');
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Feedback</li>
			</ol>
		</div>
	</div>
<div class="about">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Leave a<span> Feedback</span></h2>

				<form action="#" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-24" name="comment" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-24">
							<span class="input__label-content input__label-content--ichiro">Title Comment</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="description" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Description</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-26" name="name" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Your Name</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-27" name="city" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-27">
							<span class="input__label-content input__label-content--ichiro">Your City's Name</span>
						</label>
					</span>
					<input type="submit" name="btnin" value="Submit">
				</form>
				<?php
$con=mysqli_connect("localhost","root","","dailydeal");

if(isset($_POST['btnin']))
  {
    $comment=$_POST['comment'];
    $description=$_POST['description'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    //echo "insert into feedback values('','$comment','$description','$name','$city')";
    $q=mysqli_query($con,"insert into feedback values('','$comment','$description','$name','$city')");
  if($q)
    {
      echo "<script> alert('Your feedback has been submitted');</script>";
    }
    else
    {
    	echo "<script> alert('Enter details properly');</script>";
    }
  }
?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php
include('fff.php');
?>