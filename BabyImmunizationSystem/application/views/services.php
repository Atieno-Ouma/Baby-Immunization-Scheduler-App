<?php



 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Services</title>
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
            font-size: 14px;

    }
        #btnlinks, #btnlinks1, #btnlinks2, #btnlinks3
        {
            width:100px;
            padding: 1px;
            margin: 2px ;
            border-style: none;
            background-color: white;
            color: blue;
        }
        .btn
        {
            width: 200px;
            margin:  5px;
            padding: 0px ;
            text-align: center;
            font-family: montserrat-Regular;
            text-decoration: none;
            font-size: 20px;
            display: inline-block;
        }
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
}
    </style>
</head>
<body>
    
    <header><b><p style="font-size: 25px; padding-left: 3px;">Baby Immunization<img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px; padding-top: 20px; padding-left: 3px;"></p></b></header><br>
    <nav>
        <ul>
                       <li><a href="<?php echo base_url();?>BabyAccount">Hello,<?php echo ''.$this->session->userdata('username').''; ?></a></li>

            <li><a href="<?php echo base_url();?>Homecontroller">Home</a></li>
            <li><a href="<?php echo base_url();?>Aboutus">About us</a></li>
            <li><a class="activelink"  href="<?php echo base_url();?>Servicescontroller">Services</a></li>
            <li><a href="<?php echo base_url();?>Contactus">Contact us</a></li>
            <li><a href="<?php echo base_url();?>Logoutcontroller/logout">Logout</a></li>
        </ul>
    </nav><br><br><br><br>

    <h1><b>Our Services<hr><i>Record Your Baby Data Online To Access It Anywhere</i></h1></b>


<!-- vaccine links-->   
    <div id="btnlinks">
        
        <div class="container">

        <div class="table-responsive">
            
        </div>


        <div id="meme" class="modal fade" style="color: white; float: center; font-size: 25px;">
<table class="table table-sm" height="300px;" width="300px;">

    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <header class="bg-primary text-white">
        <h3 style="text-align: center;">VACCINE LIST</h3>
    </header>
    <th>Vaccine Name</th>
    <th>Method to Administer</th>
    <th>Baby Age to be Administered</th>

    <tr>
        <td>BCG</td>
        <td>Injection</td>
        <td>Birth</td>
        
    </tr>
    <tr>
        <td>Polio</td>
        <td>Oral</td>
        <td>Birth</td>
        
    </tr>
</table>

    </div>
    </div>


        </div>


<!--table to take in the functionalities -->
<table border="0" style="color: black; font-weight: bold;">
<tr>
    <!--Imagesrow -->
    <td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/vaccination.jpg" width="300px;" height="300px;" style="padding-right: 12px; margin-left: 20px; margin-right: 25px;"></td>
    <td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/medicine.jpg" width="300px;" height="300px;" style="padding-right: 12px; margin-right: 20px;""></td>
    <td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/growth.jpg" width="300px;" height="300px;" style="padding-right: 12px; margin-right: 20px;""></td>
    <td><img src="<?php echo "http://localhost/BabyImmunization/" ?>assets/images/pediatrician.jpg" width="300px;" height="300px;" style="padding-right: 12px;"></td>
</tr>


<!--row 1 of links -->
<tr >
    

<td style="padding-left: 40px;">

<button type="button" name="add" id="add" data-toggle="modal" data-target="#meme" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;"> Vaccines List</button>

</td>
<td style="padding-left: 40px;">

    <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal3" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;"> Medicine Taken</button>

</td>
<td style="padding-left: 40px;">

    <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal4" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;"> Baby Growth</button>

</td>
<td style="padding-left: 50px;">

<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal2" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;"> Pediatrician Records</button></td>
</tr>


<!--row 2 of links -->

<tr>
    <td style="padding-left: 33px;">  
<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;">Vaccine Administered</button>

</td>

     
  
    

</tr>


<!--row 3 of links -->

<tr>
    <td style="padding-left: 40px;">

<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal1" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;">Vaccine Scheduled</button>

</td>
     
  
    <td></td>

</tr>



</table>



<!--vaccines administered pop up -->
<div class="container">
        <div class="table-responsive">
            
        </div>
    </div>

    <div id="add_data_Modal" class="modal fade" >
        
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Vaccines Administered</h4>
                </div>
                <?php 
                if($this->uri->segment(2)=="inserted"){
                    //echo '<p class="text-success">Data Inserted</p>';
                    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                }
                ?>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url();?>Servicescontroller/form_validation">

                    <span style="color: red;">Your Records Will be Updated Once You Click Submit</span><br><br>
                     <input type="hidden" name="patientname" id="name" class="form-control" value="<?php echo ''.$this->session->userdata('username').''; ?>" required ><br>
                    <label>Vaccine Name</label>
                    <input type="text" name="vaccinename" id="name" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("vaccinename"); ?></span>
                    <label>Vaccine Price</label>
                    <input type="text" name="vaccineprice" id="price" class="form-control" required="" ><br>
                    <span class=text-danger"><?php echo form_error("vaccineprice"); ?></span>
                    <label>Date Scheduled</label>
                    <input type="date" name="datescheduled" id="startdate" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("datescheduled"); ?></span>
                    <label>Date of Administration</label>
                    <input type="date" name="dateadministered" id="enddate" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("dateadministered"); ?></span>
                    <label>Baby Age</label>
                    <input type="text" name="age" id="age" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("age"); ?></span>
                    <label>Hospital Administered At</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("hospital"); ?></span>
                    <label>Pediatrician Name</label>
                    <input type="text" name="pediatrician" id="pediatrician" class="form-control" required=""><br>
                    <span class=text-danger"><?php echo form_error("pediatrician"); ?></span>
                    

                    <input type="submit" name="insert" id="insert" value="Submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!-- vaccines scheduled pop up-->

<div class="container">
        <div class="table-responsive">
            
        </div>
    </div>

    <div id="add_data_Modal1" class="modal fade" >
        
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Schedule Vaccines</h4>
                </div>
                <div class="modal-body">
                 <form method="post" action="<?php echo base_url();?>Schedulecontroller/form_validation">
                    <span style="color: red;">Your Records Will be Updated Once You Click Schedule</span><br><br>
                     <input type="hidden" name="patientname" id="name" class="form-control" value="<?php echo ''.$this->session->userdata('username').''; ?>" required ><br>

                    <label>Vaccine Name</label>
                    <input type="text" name="vaccinename" id="name" class="form-control" required><br>
                    <span class=text-danger"><?php echo form_error("vaccinename"); ?></span>

                    <label>Date Scheduled</label>
                    <input type="date" name="thedate" id="startdate" class="form-control" required><br>
                    <span class=text-danger"><?php echo form_error("thedate"); ?></span>
                    
                    <label>Hospital To Be Administered At</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" required><br>
                    <span class=text-danger"><?php echo form_error("hospital"); ?></span>
                    
            

                    <input type="submit" name="schedule" id="schedule" value="Schedule">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- MODAL TO TAKE IN THE DATA for medicines pop up-->



    <div class="container">

        <div class="table-responsive">

            

        </div>

    </div>



    <div id="add_data_Modal3" class="modal fade" >

        

        <div class="modal-dialog">

            

            <div class="modal-content">

                <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                        <h4 class="modal-title">Add Medicines Taken</h4>

                </div>

                <div class="modal-body">
   <form method="post" action="<?php echo base_url();?>Medicinecontroller/form_validation">
                    <span style="color: red;">Your Records Will be Updated Once You Click Schedule</span><br><br>

                     <input type="text" name="patientname" id="name" class="form-control" value="<?php echo ''.$this->session->userdata('username').''; ?>" required ><br>

                       <label>Medicine Name</label>

                    <input type="text" name="medicinename" id="medicinename" class="form-control" ><br>
                    <label>Dosage</label>

                    <input type="text" name="dose" id="dosage" class="form-control" <br>
                    <label>Illness</label>

                    <input type="text" name="illness" id="dosage" class="form-control" ><br>

                    <label>Start Date</label>

                    <input type="date" name="startdate" id="startdate" class="form-control" <br>

                    <label>Date of Completion</label>

                    <input type="date" name="completiondate" id="enddate" class="form-control" ><br>

                    <label>Comments(side effects)</label>

                    <textarea name="sideeffects" id="medicineComments" class="form-control" ></textarea>

                    

                    
            

                    <input type="submit" name="save" id="schedule" value="Save">
                </form>
                

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

            </div>

        </div>

    </div>

</div>


<!-- MODAL TO TAKE IN THE DATA for growth pop up-->

<?php
if(isset($user_data)){
    foreach($user_data as $row){

    }
}
?>

    <div class="container">

        <div class="table-responsive">

            

        </div>

    </div>



    <div id="add_data_Modal4" class="modal fade" >
        

        <div class="modal-dialog">

            

            <div class="modal-content">

                <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                        <h4 class="modal-title">Baby Growth Tracker</h4>

                </div>

                <div class="modal-body">

                <form method="POST" id="#" enctype="multipart/form-data" action="<?php echo base_url();?>BabyAccount/update_data">
                    <?php
                $patname=''.$this->session->userdata('username').'';
               
                $fetch_data2;
                if($patname=='jj'){
   
                
                ?>
<?php echo 'yes';?>
              
                    <span style="color: red;">Your Records Will be Updated Once You Click Submit</span><br><br>
                     <input type="hidden" name="name" id="name" class="form-control" value="<?php echo ''.$this->session->userdata('username').''; ?>" required ><br>
                    <label>Baby Height</label>

                    <input type="number" value="<?php echo '$row->Height'; ?>" name="height" id="height"  value="<?php echo '$row->Height'?>" class="form-control" required><br>

                    <label>Baby weight</label>

                    <input type="number" name="weight" id="weight" class="form-control" required><br>

                    <label>Baby Age</label>

                    <input type="number" name="age" id="age" class="form-control" required><br>

                    <label>Date of Record Entry</label>

                    <input type="date" name="recorddate" id="recorddate" class="form-control" required><br>

                    <label>Comments(baby's body state)</label>

                    <textarea name="growthComments" id="growthComments" class="form-control" ></textarea>

                    

                    <input type="submit" name="update" id="update" value="Update">
               
             </form>
             <?php
         }
?>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

            </div>

        </div>

    </div>

</div>



<!--pediatrician records pop up -->
<div class="container">
        <div class="table-responsive">
            
        </div>
    </div>

    <div id="add_data_Modal2" class="modal fade" >
        
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Pediatrician Visited</h4>
                </div>
                <div class="modal-body">
                <form method="POST" id="insert_form" enctype="multipart/form-data" action="<?php echo base_url();?>Pediatrician/form_validation">

                    <span style="color: red;">Your Records Will be Updated Once You Click Submit</span><br><br>
                    <input type="hidden" name="patientname" id="name" class="form-control" value="<?php echo ''.$this->session->userdata('username').''; ?>" required ><br>
                    <label>Pediatrician Name</label>
                    <input type="text" name="pediname" id="name" class="form-control" required><br>
                    <label>Hospital</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" required><br>
                    <label>Date Visited</label>
                    <input type="date"  name="datevisited" id="datevisited" class="form-control" required><br>
                    
                    

                    <input type="submit" name="insert" id="insert" value="Submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
      <footer>
        <p>HOME | ABOUT | SERVICES | CONTACT US | LOGIN</p>
        <p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
    </footer>




<!-- Script 
   <script>
        $(function () {
            $('#startdate,#enddate').datetimepicker({
                useCurrent: false,
                minDate: moment()
            });
            $('#startdate').datetimepicker().on('dp.change', function (e) {
                var incrementDay = moment(new Date(e.date));
                incrementDay.add(1, 'days');
                $('#enddate').data('DateTimePicker').minDate(incrementDay);
                $(this).data("DateTimePicker").hide();
            });

            $('#enddate').datetimepicker().on('dp.change', function (e) {
                var decrementDay = moment(new Date(e.date));
                decrementDay.subtract(1, 'days');
                $('#startdate').data('DateTimePicker').maxDate(decrementDay);
                 $(this).data("DateTimePicker").hide();
            });

        });
    </script> -->
</body>
</html>