<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baby Account</title>
		<link rel="stylesheet" href="<?php echo "http://localhost/BabyImmunization/" ?>assets/css/styles.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
	
	 <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
	<nav>
		<ul>
			 <li><a class="activelink" href="<?php echo base_url();?>BabyAccount">Hello,<?php echo ''.$this->session->userdata('username').''; ?></a></li>

			 <li><a href="<?php echo base_url();?>Homecontroller">Home</a></li>
            <li><a href="<?php echo base_url();?>Aboutus">About us</a></li>
            <li><a  href="<?php echo base_url();?>Servicescontroller">Services</a></li>
            <li><a href="<?php echo base_url();?>Contactus">Contact us</a></li>
            <li><a href="<?php echo base_url();?>Logoutcontroller/logout">Logout</a></li>
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
	30px; font-weight: bold; padding-left: 10px; padding-right: 10px;"><i><?php echo ''.$this->session->userdata('username').''; ?>'s Health Report</i></td>
	<td></td>
	<td></td>
</tr>


<tr>
	<td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/vaccinepic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px; margin-left: 30px;"></td> <!-- vaccines administered-->
	<td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/schedulepic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- vaccines scheduled : insert reminder notifications here-->
	<td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/medicinepic2.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- medicines taken -->
	<td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/growthpic.jpg" alt="" height="250px" width="250px" style="margin-right: 10px;"></td><!-- growth-->
	<td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/pedipic.jpg" alt="" height="250px" width="250px" ></td><!-- pediatricians visited -->
</tr>

<tr>
	<td style="padding-left: 30px;"><a href="<?php echo base_url();?>BabyAccount/Vaccdisplay">Vaccines Administered</a></td><!-- link administered-->
	<td style="padding-left: 30px;"><a href="<?php echo base_url();?>BabyAccount/Schedisplay">Vaccines Scheduled</a></td><!--link scheduled -->
	<td style="padding-left: 30px;"><a href="<?php echo base_url();?>BabyAccount/medicine">Medicine Taken</a></td><!-- link taken meds-->
	<td style="padding-left: 30px;"><a href="<?php echo base_url();?>BabyAccount/growth">Growth</a></td><!-- link growth -->
	<td style="padding-left: 30px;"><a href="<?php echo base_url();?>BabyAccount/Pedidisplay">Pediatricians Visited</a></td><!--link pedis -->

</tr>

</table>



  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>

</body>
</html>