<?php
include('hhh.php');
?>
<?php
$con=mysqli_connect("localhost","root","","dailydeal");
if(isset($_POST['create_faq']))
{
	$question=strip_tags(mysqli_real_escape_string($_POST['question']));
	$answer=strip_tags(mysqli_real_escape_string($_POST['answer']));
	$sql="insert into faq value('','$question','$answer')";
	$res = mysqli_query($sql) or die(mysqli_error());
	header("location:faq.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to FAQ</title>
</head>
<body>
	<div align="center">
		<h1>F.A.Q</h1>
		<P><a href="faq.php">F.a.Q index</a> | <a href="cteatefaq.php">Add F.A.Q | <a href="edit.php">Update F.A.Q</a></a></P>
		<h3>Add New F.A.Q.</h3>
		<form action="createfaq.php" method="POST">
			Question:<input type="text" name="question" size="65"><br/><br/>
			Answer:  <input type="text" name="answer" size="65"><br/><br/>
			<input type="submit" name="create_faq" value="Add New FAQ">
		</form>
	</div>
</body>
</html>