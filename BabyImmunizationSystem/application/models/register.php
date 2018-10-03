
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Model{

}

session_start();

//connect to database

if(isset($_POST['insert1']))
{
	//session_start();
	$db= mysqli_connect("localhost","root","","babyimmunization");



if($password1 == $password2)
{
//create user account
	$babyname=$_POST['name'];
	$dob=$_POST['date1'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

$username=$_POST['username'];
$password1 = md5($password1); //hash password before storing it for security
$sql="INSERT INTO allusers (babyname,dob,gender,email,phone,username,password) VALUES ('$babyname','$dob','$gender','$email','$phone','$username','$password1')";

mysqli_query($db,$sql);
$_SESSION['message'] = "You are successfully logged in";
$_SESSION['name'] = $username;
header("location: Home");// take me to home page


}else
{
	//fail to create user
	$_SESSION['message'] = "The two passwords do not match";
		header("location: Form");

}


}



?>