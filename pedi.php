<?php 

session_start();

//connect to database

if(isset($_POST['insert']))
{
	$db= mysqli_connect("localhost","root","","babyimmunization");

	//session_start();
	
mysqli_query($db,"insert into pediatrician values('','$_POST[name]','$_POST[hospital]','$_POST[datevisited]')");

 /*$sql = "INSERT INTO administered (vaccinename,vaccineprice,datescheduled,dateadministered,age,hospital,pediatrician) VALUES ('$name','$price','$date1','$date2','$age','$hospital','$pediatrician')"; */


header("location: services.php");// take me to home page


}else
{
	//fail to create user

		header("location: services.php");

}






?>