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
                <h3 class="panel-title">College</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="College Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="College Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="College Course" disabled></th>
                        <th><input type="text" class="form-control" placeholder="College Description" disabled></th>
                        
                       
                        
                    </tr>
                </thead>
                <tbody>
                
                <?php
				 
				//$myq=mysqli_query($con," select * from shop_price where product_id='$url'");
				$query=mysqli_query($con," select * from college");
				while ($row=mysqli_fetch_array($query)){
				
                   echo ' <tr>
                        <td>'.$row['college_id'].'</td>
                        <td>'.$row['college_name'].'</td>
                        <td>'.$row['college_course'].'</td>
                        <td>'.$row['college_description'].'</td>
						
                    </tr>';
				}
					?>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--------------//------->
<script src="js/script.js">
</script>
</body>
</html>