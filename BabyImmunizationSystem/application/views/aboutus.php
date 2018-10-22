
<html>
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
<script src="<?php echo "http://localhost/BabyImmunization/" ?>assets/resources/jquery-3.3.1.js"></script>
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
  
   <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
  <nav>
    <ul>
       <li><a href="<?php echo base_url();?>BabyAccount">Hello,<?php echo ''.$this->session->userdata('username').''; ?></a></li>

       <li><a href="<?php echo base_url();?>Homecontroller">Home</a></li>
            <li><a class="activelink" href="<?php echo base_url();?>Aboutus">About us</a></li>
            <li><a  href="<?php echo base_url();?>Servicescontroller">Services</a></li>
            <li><a href="<?php echo base_url();?>Contactus">Contact us</a></li>
            <li><a href="<?php echo base_url();?>Logoutcontroller/logout">Logout</a></li>
    </ul>
  </nav><br><br><br>

  <h1><b>About us</h1></b>

<div class="property2" id="circle">
<p style="padding-top: 44px;"><b>Why immunize your baby?</b></p>
<p>To make their immune system fortified against agents that may cause a disease.</p>


</div>
<div class="property22" id="circle">
<p style="padding-top: 20px;"><b>Why store your baby immunization records safely?</b></p>
<p>To have an easy time in following the whole immunization process.</p>
</div>
<div class="property3" id="slideshow">
   <div>
     <img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/pic1.jpg">
   </div>
   <div>
     <img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/pic2.jpg">
   </div>
   
    <div>
     <img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/pic3.jpg">
   </div>

</div>
<div class="property4" id="circle">
<p style="padding-top: 25px;"><b>What we do:</b></p>
<p>
*Help mothers store their baby immunization records online.</p>
<p>*Display a list of the immunization schedule.</p>

</div> <br>
<div class="property44" id="circle">
<p style="padding-top: 58px;"><a  href="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/systmanual.mp4" >SYSTEM MANUAL</a></p>
</div><br><br>

  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>
			
</body>
</html>
