<!DOCTYPE html>
<html>
<head>
<title>E-counselling</title>
<link rel="stylesheet" href="css/bootstrap.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopping Cart" />
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>
</head>
<body>
<?php include('admin_header.php'); ?>
    
    
    <!-----------------//--header---------->
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="text-center">Upload Course</h3>  
			<div class="col-md-2"></div>
			<div class="col-md-8" style="box-shadow:0px 0px 4px #ccc;padding:20px;">
				<form action="course-valid.php" method="POST" enctype="multipart/form-data">
					         <div class="form-group">
                    <label class="pull-left">Course Name</label> <input type="text" class="form-control" name="name" placeholder="Enter Course Name" required>
                    </div>
                    <div class="form-group">
                    <label class="pull-left">Course Duration</label> <input type="text" class="form-control" name="duration" placeholder="Enter the Courses" required>
                    </div>
                     <div class="form-group">
                    <label class="pull-left">Course Eligibility</label> <input type="text" class="form-control" name="eligibility" placeholder="Enter the Courses" required>
                    </div>
                     <div class="form-group">
                    <label class="pull-left">Course Scope</label> <input type="text" class="form-control" name="scope" placeholder="Enter the Courses" required>
                    </div>
                    <div class="form-group">
                    <label class="pull-left">Course Description</label> <input type="text" class="form-control" form-control name="description" placeholder="Enter course detail" required>
                    </div>
                    
                       
                      <input type="submit" name="submit" >

				</form>
			</div>  
			
		</div>
	</div>
	

<script>
function imgPreview1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview_img1').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#form_img1").change(function(){
    imgPreview1(this);
});
</script>

</body>
</html>