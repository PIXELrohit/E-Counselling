<?php
//error_reporting(0);
include('../connect.php');

session_start();

if(isset($_POST['submit'])){
	if (empty($_POST['name']) || empty($_POST['pass'])) {
header('location:login.php');
}
else
{
	
	//testing the input for the security
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
	
$name=test_input($_POST['name']);
$pass=test_input($_POST['pass']);


	$run="select * from admin_db where password='$pass' AND name='$name'  ";
	$fetch=mysqli_query($con,$run);
	$rows = mysqli_num_rows($fetch);
	if ($rows==1)
	{
	while($go=mysqli_fetch_array($fetch)){
		
	$name=$go['name'];
	
	$_SESSION['name']=$name;	
		header('location:course.php');
	}
	}
	else {
		header('location:index.php?msg=error');
	}
}
}
		else {
			header('location:index.php?msg=button-error');
		}
?>

