<?php 
session_start();
?>

<!--the contact us page gives mothers a platform to give feedback and contact the website-->
<html>
<head>
	
<title>Contact us</title>
<link rel="stylesheet" type="text/css" href="take1css.css">
<style>
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
	<header><b><p style="font-size: 25px;">Baby Immunization<img src="logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px;"></p></b></header><br><br><br>
    <ul >
                  <li><a href="babyaccount.php">Hello,<?php echo $_SESSION['name']; ?></a></li>

<li ><a  href="home.php">Home</a></li>
<li ><a  href="aboutus.php">About</a>

</li>
<li ><a  href="services.php">Services</a></li>
<li ><a class="activelink" href="contactus.php">Contact Us</a></li>
<li ><a  href="logout.php">Logout</a></li>
</ul>
<div align="center" class="prop">
<h1>Contact Us</h1>
<p >For Any Inquiries or feedback</p>
</div>
<div class="property1">
<fieldset >
<div align="center">
  <legend>INQUIRY</legend>
</div>
<form id="form1" name="form1" method="post" action="">
  <label>
  <br><br>
  <div align="center">Name<br>
      <input type="text" name="textfield" required />
    </div>
  </label>
  <p align="center">
    <label>Email<br>
    <input type="email" name="textfield2" required />
    </label>
  </p>
  <p align="center">
    <label> Subject<br>
    <input type="text" name="textfield3" required />
    </label>
  </p>
  <p align="center">
    <label> Your Message<br>
    <textarea name="textarea" required></textarea>
    </label>
  </p>
  <p align="center">
    <label>
    <input type="submit" name="Submit" value="Send" />
    </label>
  </p>
</form></fieldset></div>

  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>
			
</body>
</html>
