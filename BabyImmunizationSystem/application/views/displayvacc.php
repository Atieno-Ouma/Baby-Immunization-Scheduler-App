<!DOCTYPE html>
<html>
<head>
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

	<h1><b>Administered vaccines<hr><i>These are the vaccines that have been administered to baby <?php echo ''.$this->session->userdata('username').''; ?> already</i></h1></b>

</head>
<body>
	<div align="center">
		<table border="1" >
		  <col width="130">
		    <col width="130">
		      <col width="130">
		       <col width="130">
		    <col width="130">
		      <col width="130">
		      <col width="130">
<tr>
	<th>Vaccine name</th>
	<th>Vaccine price</th>
	<th>Date scheduled</th>
	<th>Date administered</th>
	<th>Age</th>
	<th>Hospital</th>
	<th>Pediatrician</th>

</tr>
</table>
<?php
$patname=''.$this->session->userdata('username').'';
if($fetch_data3->num_rows()>0){
foreach($fetch_data3->result() as $row){
	if($row->patientname==$patname){
	?>
	<table border="1" >
		  <col width="130">
		    <col width="130">
		      <col width="130">
		        <col width="130">
		    <col width="130">
		      <col width="130">
		      <col width="130">
	<tr>
		<td ><?php echo $row->vaccinename; ?></td>
		<td><?php echo $row->vaccineprice; ?></td>
		<td><?php echo $row->datescheduled; ?></td>
		<td ><?php echo $row->dateadministered; ?></td>
		<td><?php echo $row->age; ?></td>
		<td><?php echo $row->hospital; ?></td>
		<td><?php echo $row->pediatrician; ?></td>
	</tr>
	
</table>
	<?php
}
}
}
else{
	?>
	<tr>
		<td colspan="3">No Pediatrician visited yet</td>
	</tr>
	<?php
}
?>
<BR><BR>
<a href="<?php echo base_url();?>BabyAccount">BACK</a>
</div>
</body>
</html>

