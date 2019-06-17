<!DOCTYPE html>
<html lang="en">
<head>
<title>E Counselling</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>


<!-- //switcher-grid and list alignment -->
</head>
<body>	
	
	<!--header -->
    <?php include('header.php'); ?>
    <!--// header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		
	</div>
	<!-- //breadcrumbs -->
	<!-- Bikes -->
	<div class="total-ads main-grid-border">
		<div class="container">
			
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					
				
                <!-- Search Links -->
                <div class="w3-brand-select">
					<h3 class="agileits-sear-head">Eligibility</h3>
					  <div class="wthree-footer-grid">
                      <ul>
                      	<li><a href="search.php?q=12-math">12 (P.C.M.)</a></li>
                        <li><a href="search.php?q=12-bio">12 (Bio)</a></li>
                        <li><a href="search.php?q=12-commerce">12 (Commerce)</a></li>
                        <li><a href="search.php?q=12-art">12 (arts)</a></li>
                      </ul>
                      </div>
					</select>
				</div>
                <!--// Search links -->
				
				</div>
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
							<div id="container">
							<div class="clearfix"></div>
							<ul class="list">
                            
                            <?php 
							include('connect.php');
							if(isset($_GET['q'])){								
								$url=$_GET['q'];
								$query= "SELECT * FROM course WHERE course_eligibility LIKE '%$url%' ";
								$fetch=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($fetch)){
									echo '
									<!-- Course View -->
                                <a href="course-detail.php?id='.$row['course_id'].'">
									<li>
									<img src="images/course-icon.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">'.$row['course_name'].'</h5>
									<span class="adprice">'.$row['course_duration'].' years</span>
									<p style="color:black;font-size:17px;">'.$row['course_eligibility'].'</p>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
                                <!--// Course View -->
									';
								}
							}
							else if(isset($_GET['search'])){
								$url=$_GET['eligibility'];
								if(isset($_SESSION['user_id'])){
									$user_id=$_SESSION['user_id'];
									$pass_year=$_GET['pass_year'];
									$date=date("Y/m/d");
									$string="INSERT INTO course_enquiry (enquiry_user_id,enquiry_eligibility,enquiry_passing_year,enquiry_date) values ('$user_id','$url','$pass_year','$date')";
									mysqli_query($con,$string);
								}
								$query= "SELECT * FROM course WHERE course_eligibility LIKE '%$url%' ";
								$fetch=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($fetch)){
									echo '
									<!-- Course View -->
                                <a href="course-detail.php?id='.$row['course_id'].'">
									<li>
									<img src="images/course-icon.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">'.$row['course_name'].'</h5>
									<span class="adprice">'.$row['course_duration'].' years</span>
									<p style="color:black;font-size:17px;">'.$row['course_eligibility'].'</p>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
                                <!--// Course View -->
									';
								}
							}
							else {
								$query= "SELECT * FROM course ";
								$fetch=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($fetch)){
									echo '
									<!-- Course View -->
                                <a href="course-detail.php?id='.$row['course_id'].'">
									<li>
									<img src="images/course-icon.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">'.$row['course_name'].'</h5>
									<span class="adprice">'.$row['course_duration'].' years</span>
									<p style="color:black;font-size:17px;">'.$row['course_eligibility'].'</p>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
                                <!--// Course View -->
									';
								}
							}
							?>
								
							</ul>
						</div>
							</div>
						</div>
						
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Bikes -->
    <!-- footer -->
	<?php include('footer.php'); ?>
    <!--// footer -->
</body>

		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>