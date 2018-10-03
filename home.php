<?php 

session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <script src="jquery-331.js"></script>
        <script src="home.js"></script>
            <link rel="stylesheet" href="styles.css">
                <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

  <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization <img src="logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 0px; padding-left: 3px;"></p></b></header><br>
    <nav>
        <ul>
                        <li><a href="babyaccount.php">Hello,<?php echo $_SESSION['name']; ?></a></li>

            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a class="activelink"  href="services.php">Services</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

        </ul>
    </nav><br><br><br>


        <!--
            <img class="gallery" src="baby1.png">
            <img class="gallery" src="baby2.png">
            <img class="gallery" src="baby3.png">
            <img class="gallery" src="baby4.png">
        -->

        <img class="images" src="baby4.png">
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