
         <!---------------header----------------->
        <div class="container-fluid">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Admin Panel</a>
    </div>
    <ul class="nav navbar-nav">
     
      <li><a href="course.php">Course</a></li>
      <li><a href="upload-course.php">Upload Course</a></li>
      <li><a href="user.php">User</a></li>
      <li><a href="college.php">College</a></li>
      <li><a href="upload-college.php">Upload College</a></li>
      <li><a href="course-enquiry.php">Course Enquiry</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
	session_start();
	if(!isset($_SESSION['name'])){
		header('location:index.php');
	}
	else{
		echo '<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> '.$_SESSION['name'].'</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		';
	}
	?>
     
      
    </ul>
  </div>
</nav>
</div>
    