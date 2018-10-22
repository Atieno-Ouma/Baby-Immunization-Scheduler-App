

<!--the contact us page gives mothers a platform to give feedback and contact the website-->
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
</head>
<body>
  
   <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
  <nav>
    <ul>
       <li><a  href="<?php echo base_url();?>BabyAccount">Hello,<?php echo ''.$this->session->userdata('username').''; ?></a></li>

       <li><a href="<?php echo base_url();?>Homecontroller">Home</a></li>
            <li><a href="<?php echo base_url();?>Aboutus">About us</a></li>
            <li><a  href="<?php echo base_url();?>Servicescontroller">Services</a></li>
            <li><a class="activelink" href="<?php echo base_url();?>Contactus">Contact us</a></li>
            <li><a href="<?php echo base_url();?>Logoutcontroller/logout">Logout</a></li>
    </ul>
  </nav><br><br><br>

  <h1><b>For Any Inquiries or feedback,Fill in the form below </h1></b>


<div class="property1">

<div align="center">
 
</div>
 <?php 
                if($this->uri->segment(2)=="inserted"){
                    echo '<p class="text-success">Feedback sent successfully</p>';
                    //echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                }
                ?>
 <form method="post" action="<?php echo base_url();?>Contactus/form_validation">
  

      <input type="hidden" name="Name" value="<?php echo ''.$this->session->userdata('username').''; ?>" required />
 
  <p align="center">
    <label>Email<br>
    <input type="email" name="Email" required />
    </label>
  </p>
  <p align="center">
    <label> Feedback<br>
       <textarea name="Feedback" value="" placeholder="" rows="5" cols="30" required></textarea>

    </label>
  </p>
  <p align="center">
    <label> Star rating<br>
    <input type="text" name="Star_rating" required />
    </label>
  </p>
  <p align="center">
    <label>
    <input type="submit" name="Submit" value="Send" />
    </label>
  </p>
  
</form></div>

  <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>
			
</body>
</html>
