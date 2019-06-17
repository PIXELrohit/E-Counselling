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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>
</head>
<body>
	
         <!---------------header----------------->
        <?php include('admin_header.php'); ?>
        <!--//header -->
   
                <!----shop--list-->
 <div class="container">


    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Course Enquiry</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="User Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Enquiry Eligibility" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Enquiry Passing Year" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Enquiry_date" disabled></th>
                        
                       
                        
                    </tr>
                </thead>
                <tbody>
                
                <?php
				 
				//$myq=mysqli_query($con," select * from shop_price where product_id='$url'");
				$query=mysqli_query($con," select * from course_enquiry");
				while ($row=mysqli_fetch_array($query)){
				
                   echo ' <tr>
                        <td>'.$row['enquiry_id'].'</td>
                        <td>'.$row['enquiry_user_id'].'</td>
                        <td>'.$row['enquiry_eligibility'].'</td>
                        <td>'.$row['enquiry_passing_year'].'</td>
						<td>'.$row['enquiry_date'].'</td>
						
                    </tr>';
				}
					?>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--------------//------->
 <script src="js/script.js"></script>
</body>
</html>