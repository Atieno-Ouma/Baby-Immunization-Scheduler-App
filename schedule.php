<?php 

session_start();

//connect to database

if(isset($_POST['schedule']))
{
	$db= mysqli_connect("localhost","root","","babyimmunization");
	//session_start();
	
mysqli_query($db,"insert into scheduled values('','$_POST[name]','$_POST[date1]','$_POST[hospital]')");


header("location: services.php");// take me to home page


}else
{
	//fail to create user
		header("location: services.php");

}






?>