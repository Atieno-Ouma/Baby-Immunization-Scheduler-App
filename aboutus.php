<?php 

session_start();
?>
<html>
<head>
<title>About us</title>
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
<script src="jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  // Fading out displayed paragraphs
    $(".dl").click(function(){
      $("#no").fadeOut();
	        $("#yes").fadeIn();
	  });
	  $(".exit").mouseover(function(){
      $("#yes").fadeOut();
	        $("#no").fadeIn();
	  });
        

});

$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>
</head>
<body>
	<header><b><p style="font-size: 25px;">Baby Immunization<img src="logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px;"></p></b></header><br><br><br>
    <ul >
                  <li><a href="babyaccount.php">Hello,<?php echo $_SESSION['name']; ?></a></li>

<li ><a  href="home.html">Home</a></li>
<li ><a  class="activelink" href="aboutus.html">About</a>

</li>
<li ><a  href="services.php">Services</a></li>
<li ><a  href="contactus.html">Contact Us</a></li>
<li ><a  href="logout.php">Logout</a></li>
</ul>
<div align="center" class="prop">
<h1>About Us</h1>
</div>
<div class="property2" id="circle">
<p style="padding-top: 44px;"><b>Why immunize your baby?</b></p>
<p>To make their immune system fortified against agents that may cause a disease.</p>


</div>
<div class="property22" id="circle">
<p style="padding-top: 30px;"><b>Why store your baby immunization records safely?</b></p>
<p>To have an easy time in following the whole immunization process.</p>
</div>
<div class="property3" id="slideshow">
   <div>
     <img src="pic1.jpg">
   </div>
   <div>
     <img src="pic2.jpg">
   </div>
   
    <div>
     <img src="pic3.jpg">
   </div>

</div>
<div class="property4" id="circle">
<p style="padding-top: 29px;"><b>What we do:</b></p>
<p>
*Help mothers store their baby immunization records online.</p>
<p>*Display a list of the immunization schedule.</p>

</div> <br>
<div class="property44" id="circle">
<p style="padding-top: 58px;"><a  href="manual.pdf" >SYSTEM MANUAL</a></p>
</div><br><br>

  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>
			
</body>
</html>
