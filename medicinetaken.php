<?php

session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medicine</title>
	<link rel="stylesheet" href="styles.css">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
	<nav>
		<ul>
			            <li><a href="babyaccount.php">Hello,<?php echo $_SESSION['name']; ?></a></li>

			<li><a href="home.php">Home</a></li>
			<li><a href="aboutus.php">About</a></li>
			<li><a class="activelink"  href="services.php">Services</a></li>
			<li><a href="contactus.php">Contact us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav><br><br><br>

	<h1><b>Our Services<hr><i>Record Your Baby Data Online To Access It Anywhere</i></h1></b>

 <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>
</body>
</html>