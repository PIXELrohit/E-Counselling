<?php
// Establishing connection with server..
include('connect.php');

//Fetching Values from URL  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];


//Insert query 
  $insert = mysqli_query($con,"insert into user_db(name,email,phone,password) values ('$name', '$email','$phone','$password')");
  if($insert){
  $query="SELECT * FROM user_db WHERE phone=$phone";
  $fetch=mysqli_query($con,$query);
  $row=mysqli_fetch_array($fetch);
  session_start();
  echo $_SESSION['user_id']=$row['user_id'];
  echo $_SESSION['user_name']=$row['name'];
  header('location:index.php');
  }
  else{
	  echo 'Data not iserted';
	  header('location:signup.php?msg=error');
  }
//connection closed
  mysqli_close($connection);
?>