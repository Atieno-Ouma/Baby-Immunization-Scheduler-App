
<?php 
 $this->session->userdata('username');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <script src="jquery-331.js"></script>
        <script src="home.js"></script>
            <link rel="stylesheet" href="<?php echo "http://localhost/BabyImmunization/" ?>assets/css/styles.css">
                <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
    nav
        {
            background-color: cyan;
            color: black;
            text-align: center;
            width: 600px;
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


</style>
    </head>

    <body>

  <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization <img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 0px; padding-left: 3px;"></p></b></header><br>
    <nav>
        <ul>
                        <li><a href="<?php echo base_url();?>BabyAccount">Hello,<?php echo ''.$this->session->userdata('username').''; ?></a></li>

            <li><a href="<?php echo base_url();?>Homecontroller" class="activelink"  >Home</a></li>
            <li><a href="<?php echo base_url();?>Aboutus">About us</a></li>
            <li><a href="<?php echo base_url();?>Servicescontroller">Services</a></li>
            <li><a href="<?php echo base_url();?>Contactus">Contact us</a></li>
            <li><a href="<?php echo base_url();?>Logoutcontroller/logout">Logout</a></li>
        </ul>

        </ul>
    </nav><br><br><br>


        <!--
            <img class="gallery" src="baby1.png">
            <img class="gallery" src="baby2.png">
            <img class="gallery" src="baby3.png">
            <img class="gallery" src="baby4.png">
        -->
 <h1><b>Baby immunization system<hr></h1></b>
          <img class="images" src="<?php echo "http://localhost/BabyImmunization/"?>assets/images/baby4.png">
        <div id="parallax1">
            <div class="articles">
               
                
              
            </div>
        </div>


       

      <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>

    </body>
</html>
