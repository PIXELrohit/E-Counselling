<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="index.php">Welcome To E-Counselling </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
                <?php
				//error_reporting(0);
				session_start();
				if(!isset($_SESSION['user_id'])){
					echo '<li class="dropdown head-dpdn">
						<a href="signin.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="signup.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
					</li>
					';
				}
				else{
					echo '<li class="dropdown head-dpdn">
						<a href="user-profile.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> '.$_SESSION['user_name'].'</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="logout.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Logout</a>
					</li>
					';
				}
				?>
					
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.php"><span>E</span>Counselling</a></h1>
				</div>
				<div class="agileits_search">
					<form action="search.php" method="GET">
                    	
                        <label style="margin-left:10px;">Passing Year :</label>
						<input name="pass_year" type="date" required style="margin-left:10px;" />
                        <select id="agileinfo_search" name="eligibility" required="" style="border-right:1px solid black;">
							<option value="">Course Eligibility</option>
							<option value="10">10</option>
                            <optgroup label="12"></optgroup>
							<option value="12-Math">12 (Maths)</option>
							<option value="12-bio">12 (Bio)</option>
							<option value="12-commerce">12 (Commerce)</option>
							<option value="12-art">12 (Art)</option>
                            <optgroup label="Graduation"></optgroup>
							<option value="Bachelor of Computer Application">B.C.A.</option>
							<option value="Bachelor of Science in maths">B.Sc. (Math)</option>
							<option value="Bachelor of Science in bio">B.Sc. (Bio)</option>
							<option value="Bachelor of Science in it">B.Sc. (IT)</option>
						</select>
 						
						<button type="submit" name="search" value="search" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				<a class="post-w3layouts-ad" href="admin/index.php" target="_blank">Admin</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->