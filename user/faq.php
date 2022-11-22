<!DOCTYPE html>
<?php
include('hhh.php');
?>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">FAQ</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- help-page -->
	<div class="faq-w3agile">
		<div class="container"> 
			<h2 class="w3_agile_header">Frequently asked questions(FAQ)</h2>
			<?php
//error_reporting(1);
$conn = mysqli_connect("localhost","root","","dailydeal");
?>
<?php
$q="Select * from faq;";
$result = mysqli_query($conn,$q);
$cnt=mysqli_num_rows($result)>0;
if ($cnt) 
{
	while($row = mysqli_fetch_array($result)) 
		{
			?> 
			<ul class="faq">
				<li class="item1"><a href="#" title="click here"><b><?php echo $row['question'];?></b></a>
					<ul>
						<li class="subitem1"><p><?php echo $row['answer'];?></p></li>										
					</ul>
				</li>
			</ul>
								<?php
        }
}
else
{
	echo "no data";
}
?> 
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs -->   
		</div>
	</div>
	<div class="about">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Create a <span> FAQ</span></h2>

				<form action="#" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="ques" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Question</span>
						</label>
					</span>
					<textarea name="ans" placeholder="Your answer goes here..." required=""></textarea>
					<input type="submit" name="btnin" value="Submit">
				</form>
				<?php
$con=mysqli_connect("localhost","root","","dailydeal");
if(isset($_POST['btnin']))
  {
    $question=$_POST['ques'];
    $answer=$_POST['ans'];
    $q=mysqli_query($con,"insert into faq values('','$question','$answer')");
  if($q)
    {
      header("location:faq.php");
      echo "<script> alert('Thank You For Your Valuable Comment');</script>";
    }
    else
    {
    	echo "<script> alert('Please Enter Details Properly');</script>";
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