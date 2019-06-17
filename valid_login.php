<?php
//error_reporting(0);
include('connect.php');

session_start();

if(isset($_POST['submit'])){
	if (empty($_POST['phone']) || empty($_POST['password'])) {
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
	
$phone=test_input($_POST['phone']);
$pass=test_input($_POST['password']);


	$run="select * from user_db where password='$pass' AND phone='$phone'  ";
	$fetch=mysqli_query($con,$run);
	$rows = mysqli_num_rows($fetch);
	if ($rows==1)
	{
	while($go=mysqli_fetch_array($fetch)){
		
	$name=$go['name'];
	$id=$go['user_id'];
	
	$_SESSION['user_name']=$name;
	$_SESSION['user_id']=$id;	
		header('location:user-profile.php');
	}
	}
	else {
		header('location:signin.php?msg=error');
	}
}
}
		else {
			header('location:signin.php?msg=button-error');
		}
?>

