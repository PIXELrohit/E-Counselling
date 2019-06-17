<!DOCTYPE html>
<html lang="en">
<head>
<title>E Counselling</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
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
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
<!-- //language-select -->
<link rel="stylesheet" href="css/flexslider.css" media="screen" /><!-- flexslider css -->
</head>
<body>
	
	
    <!-- header -->
    <?php include('header.php'); ?>
    <!--// header -->
    
    	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--single-page-->
    
    					<?php 
							include('connect.php');
							if(isset($_GET['id'])){
								$url=$_GET['id'];
								$query= "SELECT * FROM course WHERE course_id=$url";
								$fetch=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($fetch)){
									$id=$row['course_id'];
									$name=$row['course_name'];
									$duration=$row['course_duration'];
									$eligibility=$row['course_eligibility'];
									$scope=$row['course_scope'];
									$description=$row['course_description'];
								}
							}
							?>
    
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-8 product-view">
					<h2><?php echo $name ?></h2>
					<p> Duration: <?php echo $duration ?> years, Course ID: <?php echo $id ?></p>
					
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">Duration </span> : <?php echo $duration ?><div class="clearfix"></div></h4>
						<h4><span class="w3layouts-agileinfo">Eligibility </span> : <strong><?php echo $eligibility ?></strong></h4>
						
						<h4><span class="w3layouts-agileinfo">Scope</span> :<p><?php echo $scope ?></p><div class="clearfix"></div></h4>
                       
                       <div class="clearfix"></div>
					
					</div>
                    
                    <div class="row" style="padding:10px;box-shadow:0px 0px 3px #ccc;margin:20px 0px;">
                    <p style="line-height:20px;font-size:16px;"><?php echo $description ?></p>
                    <div class="clearfix"></div>
                    </div>
                    
                    <!-- Colleges -->
                      <div id="container">
							
							<ul class="list">
                            
                            <?php 
							
								$query= "SELECT * FROM college WHERE college_course LIKE '%$name%'";
								$fetch=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($fetch)){
									echo '
									<a href="">
									<li>
									<img src="images/my-college.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">'.$row['college_name'].'</h5>
									<span class="adprice">'.$row['college_course'].'</span>
									<p class="catpath">'.$row['college_description'].'</p>
									</section>
									
									<div class="clearfix"></div>
									</li> 
								</a>
									';
								
							}
							?>
                            
								
								
							</ul>
						</div>
						
						
						
                    <!--// Colleges -->
                    
				</div>
				<div class="col-md-4 product-details-grid">
					<a href="course-detail.php?id=4">
                    <div class="interested">
						<h4 class="text-center">Bachelor of Technology</h4>
						<p>Duration: 4 Years</p>
                        <p>Eligibility: 12 (maths)</p>
					</div>
                    </a>
				</div>
                <div class="col-md-4 product-details-grid">
					<a href="course-detail.php?id=1">
                    <div class="interested">
						<h4 class="text-center">Bachelor of Computer Application</h4>
						<p>Duration: 4 Years</p>
                        <p>Eligibility: 12 (maths)</p>
					</div>
                    </a>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer -->
    <?php include('footer.php'); ?>
        <!--//footer section end-->
</body>
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
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