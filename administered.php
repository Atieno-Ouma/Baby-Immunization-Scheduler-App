<?php 

session_start();

//connect to database

if(isset($_POST['insert']))
{
	$db= mysqli_connect("localhost","root","","babyimmunization");

	//session_start();
	
mysqli_query($db,"insert into administered values('','$_POST[name]','$_POST[price]','$_POST[date1]','$_POST[date2]','$_POST[age]','$_POST[hospital]','$_POST[pediatrician]')");

 /*$sql = "INSERT INTO administered (vaccinename,vaccineprice,datescheduled,dateadministered,age,hospital,pediatrician) VALUES ('$name','$price','$date1','$date2','$age','$hospital','$pediatrician')"; */


header("location: services.php");// take me to home page


}else
{
	//fail to create user

		header("location: services.php");

}






?>