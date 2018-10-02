<?php 
session_start();
$error = '';


if(isset($_POST['login']))
{
	$conn = mysqli_connect("localhost","root","","babyimmunization");


	if(empty($_POST['name']) || empty($_POST['pword']))
	{
		$error= "Username or Password is missing";
	}
	else if(!empty($_POST['name']) && !empty($_POST['pword']))
	{ 
		$username = $_POST['name'];
		$password = $_POST['pword'];


		$query = "SELECT username, password from allusers where username='?' AND password='?' LIMIT 1";

		mysqli_query($conn,$query);

		$_SESSION['message'] = "You are successfully logged in";
		$_SESSION['name'] = $username;
		header("location: home.php");// take me to home page

	}
	
	else 
	{
		//fail to create user
		$_SESSION['message'] = "Username and password do not match";
		header("location: form.php");
	}
}



?>