<?php
	$medicineid = filter_input(INPUT_POST, 'medicineid');
	$babyid = filter_input(INPUT_POST, 'babyid');
	$medicinename=filter_input(INPUT_POST, 'medicinename');
	$dose = filter_input(INPUT_POST, 'dose');
	$illness = filter_input(INPUT_POST, 'illness');
	$startdate = filter_input(INPUT_POST, 'startdate');
	$completiondate = filter_input(INPUT_POST, 'completiondate');
	$hospital = filter_input(INPUT_POST, 'hospital');

	if(!empty($medicineid)){
	if(!empty($babyid)){
	if(!empty($medicinename)){
	if(!empty($dose)){
	if(!empty($illness)){
	if(!empty($startdate)){
	if(!empty($completiondate)){
	if(!empty($hospital)){

		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "baby";

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
		}

		else{
			$sql = "INSERT INTO medicine ('medicineid', 'babyid', 'medicinename', 'dose', 'illness', 'startdate', 'completiondate', 'hospital') VALUES ($medicineid, $babyid, $medicinename, $dose, $illness, $startdate, $comletiondate, $hospital)";
			if($conn -> query($sql)){
				echo "New record is inserted succesfully";
			}
			else {
				echo "Error:" .$sql . "<br>" . $conn->error;
			}
			$conn.close();
		}

	}}}}}}}}



/*
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

*/
?>
