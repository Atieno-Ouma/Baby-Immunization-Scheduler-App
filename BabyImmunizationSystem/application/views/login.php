
<!DOCTYPE html>
<html>
<head>
	<title>Baby immunization Login | <?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo "http://localhost/BabyImmunization/" ?>assets/css/styles.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>

	body{
		background-image: url(<?php echo "http://localhost/BabyImmunization/" ?>assets/images/landingpic3.jpg);
		background-repeat: no-repeat;
			font-family: montserrat-Regular;
			background-size: cover;
			background-position: justify;
	}
		
			#me
		{
			color: white;
			text-align: right;
			width: 500px;
			padding-left: 0px;
			display: inline-block;
			padding-top: 0px;
			justify-content: space-around;
			display: flex;

		}

		#me ul li {
    border-left:1px ;
    list-style-type:none;
    padding:10px;
    width:100%;                                 
    }
   

   
	</style>
</head>
<body>
	<body>
	<header><b><p style="font-size: 25px; color: white;margin-left: 80px;">Baby Immunization<img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px;"></p></b></header>
<div class="me">
		<ul>
			<li style="text-align: right; float: right; font-size: 25px; padding-top: 0; color: white; margin-right: 140px;"><b><i>+254 700 000 234</i></b></li>
			<li style="text-align: right; float: right; font-size: 25px; padding-top: 0; color: white; margin-right: 60px; "><i><b>babyimmunization@gmail.com</i></b></b>
		</li>
		
		</ul>
	</div>

<br><br><br><br>
<p style="float: left; color: white; font-size: 25px; padding-bottom: 20px; padding-top: 20px; margin-left: 80px;">
	<i>Baby Immunization Scheduling App Assists Modern Kenyan Parents To Keep Track Of Their Babies Development.<br>
	It Tracks Vaccinations, Growth, Medicines and Pediatricians Visited.<br>
	Through Baby Immunizatoon Scheduler Your Child(ren) Health Becomes A Button Away.</i>
</p>
	
	<br><br><br>




<div style="padding-top: 200px; margin-left: 100px; ">
<button type="button" name="add" id="add" data-toggle="modal" data-target="#login1" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 35px; border-style: none; margin-right: 30px;">Login</button>  <button type="button" name="add" id="add" data-toggle="modal" data-target="#signup1" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;">Create An Account</button> 
</div>


<!-- login pop up -->
<div class="container">
		<div class="table-responsive">
			
		</div>
	</div>

	<div id="login1" class="modal fade" >
		
		<div class="modal-dialog">
			
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login To Your Accounts</h4>
				</div>
				<div class="modal-body">
					<div class="modal-body">
				<form method="post" action="<?php echo base_url();?>Logincontroller/login_validation">
					<span style="color: red;">Login If You Already Have An Account</span><br><br>
				<div class="form-group">
				<label >Username</label>
				<input type="text" name="username" class="form-control" size="4" required/>
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" size="35" required/>
				
			</div>
			<div class="form-group">
				<input type="submit" name="insert" value="Login" class="btn btn-info"/>
				<?php 
				echo $this->session->flashdata("error");
				?>
			</div>
				</form>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<h1 style="color: white"><?php 
				echo $this->session->flashdata("error");
				?></h1>
<!--sign up pop up -->
<div class="container">
		<div class="table-responsive">
			
		</div>
	</div>

	<div id="signup1" class="modal fade" >
		
		<div class="modal-dialog">
			
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Create An Account</h4>
				</div>
				<div class="modal-body">
				<form method="post" action="<?php echo base_url();?>Registercontroller/form_validation">


					<span style="color: red;">Your Records Will be Updated Once You Click Submit</span><br><br>

					<label>Baby Name</label>
					<input type="text" name="babyname" id="name" class="form-control" required><br>
					
					<label>Date Of Birth</label>
					<input type="date" name="dob" id="startdate" class="form-control" required><br>
					<label>Gender</label><br>
					<select name="gender" >						
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select><br><br>
					<label>Parents Email</label>
					<input type="text" name="email" id="email" class="form-control" required><br>
					<label>Parents Phone Number</label>
					<input type="text" name="phone" id="phone" class="form-control" required><br>
					<label>Username</label>
					<input type="text" name="username" id="username" class="form-control" required><br>
					<label>Password</label>
					<input type="password" name="password" id="password" class="form-control" required><br>
					<label>Confirm Password</label>
					<input type="password" name="password2" id="password2" class="form-control" required><br>

					<input type="submit" name="insert" id="insert1" value="Submit">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>






</body>
	
</html>

