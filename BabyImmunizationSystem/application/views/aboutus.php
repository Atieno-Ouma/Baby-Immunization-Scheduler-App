
<html>
<head>
<title>About us</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<script src="<?php echo base_url() ?>assets/resources/jquery-3.3.1.js"></script>
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
	<header><b><p style="font-size: 25px;">Baby Immunization<img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px;"></p></b></header><br><br><br>
    <ul >
<li ><a  href="Home">HOME</a></li>
<li ><a  class="activelink" href="aboutus.php">ABOUT</a>

</li>
<li ><a  href="Service">SERVICES</a></li>
<li ><a  href="Contactus">CONTACT US</a></li>
<li ><a  href="Login">LOGIN</a></li>
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
     <img src="<?php echo base_url() ?>assets/images/pic1.jpg">
   </div>
   <div>
     <img src="<?php echo base_url() ?>assets/images/pic2.jpg">
   </div>
   
    <div>
     <img src="<?php echo base_url() ?>assets/images/pic3.jpg">
   </div>

</div>
<div class="property4" id="circle">
<p style="padding-top: 29px;"><b>What we do:</b></p>
<p>
*Help mothers store their baby immunization records online.</p>
<p>*Display a list of the immunization schedule.</p>

</div>
<div class="property44" id="circle">
<p style="padding-top: 58px;"><a  href="manual.pdf" >SYSTEM MANUAL</a></p>
</div>
<div class="lowerbar" align="center">
<p><a href="Home">HOME</a>			<a  href="Aboutus">ABOUT</a>			<a  href="Service">SERVICES</a>			<a href="Contactus">CONTACT US</a>			<a  href="Login">LOGIN</a></p>
<p>Copyright Baby Immunization Schedule</p>
</div>
			
</body>
</html>
