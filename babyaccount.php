<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baby Account</title>
		<link rel="stylesheet" href="styles.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body
	{
			font-family: montserrat-Regular;

	}
		nav
		{
			background-color: cyan;
			color: black;
			text-align: center;
			width: 500px;
			padding-right: 20px;
			display: inline-block;
			padding-top: 0px;
			justify-content: space-around;
			display: flex;
			margin: 0 5px;

		}
		nav ul li {
    border-left:1px ;
    list-style-type:none;
    padding:10px;
    width:100%;                                 
    }
    .activelink{
	background-color: white;
	display: inline-block;

}

footer
{
 bottom: 5px;
 background-color: cyan;
 text-align: center;
 width: 100%;
 left: 0;
 position: fixed;
 }

</style>
</head>
<body>
	
	<header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
	<nav>
		<ul>
			 <li><a class="activelink" href="babyaccount.php">Hello,<?php echo $_SESSION['name']; ?></a></li>

			<li><a href="home.php">Home</a></li>
			<li><a href="aboutus.php">About</a></li>
			<li><a   href="services.php">Services</a></li>
			<li><a href="contactus.php">Contact us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav><br><br><br>

	<h1><b>Our Services<hr><i>Record Your Baby Data Online To Access It Anywhere</i></h1></b>


<!--baby profile picture and name -->
<table>

	<tr>
	</tr> <!--echo baby name here -->

<tr>
	<td><?php ?></td> <!--baby profile pic --> 	
	<td><?php ?></td> <!--baby name -->
	<td><?php ?></td> <!--baby dob -->
	<td><?Php ?></td> <!--baby sex -->


</tr>



<tr>
	<td></td>
	<td></td>
	<td style="text-align: center; color: crimson; font-size: 
	30px; font-weight: bold; padding-left: 10px; padding-right: 10px;"><i><?php echo $_SESSION['name']; ?>'s Health Report</i></td>
	<td></td>
	<td></td>
</tr>


<tr>
	<td><img src="vaccinepic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px; margin-left: 30px;"></td> <!-- vaccines administered-->
	<td><img src="schedulepic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- vaccines scheduled : insert reminder notifications here-->
	<td><img src="medicinepic2.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- medicines taken -->
	<td><img src="growthpic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- growth-->
	<td><img src="pedipic.jpg" alt="" height="250px" width="250px" ></td><!-- pediatricians visited -->
</tr>

<tr>
	<td style="padding-left: 30px;"><a href="displayvacc.php">Vaccines Administered</a></td><!-- link administered-->
	<td style="padding-left: 30px;"><a href="displayshed.php">Vaccines Scheduled</a></td><!--link scheduled -->
	<td> Medicines Taken</td><!-- link taken meds-->
	<td>Growth</td><!-- link growth -->
	<td style="padding-left: 30px;"><a href="displaypedi.php">Pediatricians Visited</a></td><!--link pedis -->

</tr>

</table>



  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>

</body>
</html>