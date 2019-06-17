  <?php
include('../connect.php');
 

//Fetching Values from URL

$name=$_POST['name'];
$course=$_POST['course'];
$description=$_POST['description'];
$description = str_replace("'", "", $description);
$description=str_replace('"','',$description);


//Insert query 
  $insert = mysqli_query($con,"INSERT into college(college_name,college_course,college_description) values ('$name','$course','$description')");
  if($insert){
    header('location:college.php');  
  }
  else{
    echo 'Data insertion failed in stock';
  }
 //connection closed
?>
