<?php
$baby_name=filter_input(INPUT_POST, 'baby_name');
$baby_weight=filter_input(INPUT_POST, 'baby_weight');
$baby_height=filter_input(INPUT_POST, 'baby_height');
if (!empty($baby_name)) {
	if (!empty($baby_weight)) {
	if (!empty($baby_height)) {
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
	$sql="INSERT INTO growth (baby_name,baby_weight,baby_height) values('$baby_name','$baby_height',$'baby_weight') ";
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

	echo "baby_name should not be empty";
	die();
}
}
else{
	echo "baby_weight should not be empty";
	die();

}
?>

