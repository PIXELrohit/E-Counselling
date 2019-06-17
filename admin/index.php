<?php
include('../connect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	
<div class="container-fluid">
<div class="col-md-4"></div>
<div class="col-md-4" style="padding:20px;box-shadow:0px 0px 3px #ccc;margin-top:100px;">
<h3 style="text-align:center;">Admin Login</h3>
<form action="valid_login.php" method="POST">

<div class="form-group" style="margin-top:30px;">
<input type="text" name="name" placeholder="Admin Name" class="form-control" />
</div>
<div class="form-group">
<input type="password" name="pass" placeholder="Input Password" class="form-control" />
</div>
<input class="btn btn-info btn-block" type="submit" name="submit" value="submit" />
</form>
</div>
<div class="col-md-4"></div>
</div>

</body>
</html>