<?php
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');
if (!empty($username)) {
	if (!empty($password)) {
		$host="localhost";
		$dbusername="root";
$dbpassword="";
$dbname="baby";

//create connection
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()) {
	die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());

	# code...
}
else{
	$sql="INSERT INTO login (username,password) values('$username','$password') ";
	if($conn->query($sql)){
		echo "New record is inserted succesfully";
	}
	else {
		echo "Error:" .$sql . "<br>" . $conn->error;
	}
	$conn->close();
	# code...
}
}
else{

	echo "password should not be empty";
	die();
}
}
else{
	echo "Username should not be empty";
	die();

}
?>