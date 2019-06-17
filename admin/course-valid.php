  <?php
// Establishing connection with server..
include('../connect.php');
 

//Fetching Values from URL

$name=$_POST['name'];
$duration=$_POST['duration'];
$eligibility=$_POST['eligibility'];
$scope=$_POST['scope'];
$description=$_POST['description'];
$description = str_replace("'", "", $description);
$description=str_replace('"','',$description);

//Insert query 
  //$insert = mysqli_query($con,"INSERT into course(course_name,course_duration,course_eligibility,course_scope,course_description) values ('$name','$duration','$eligibility','$scope','$description')");
  $insert = mysqli_query($con,"INSERT into course(course_name,course_duration,course_eligibility,course_scope,course_description) values ('$name','$duration','$eligibility','$scope','".$description."')");
  if($insert){
    header('location:course.php');  
  }
  else{
    echo 'Data insertion failed in stock';
  }
 //connection closed
  mysqli_close($con);
?>
