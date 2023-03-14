<!DOCTYPE html>
<html>

<!-- Mirrored from medialoot.com/preview/lumino/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 06:38:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HospiTech</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php 

		include 'header.php';

	?>
		
	<section class="section contact">
    <!-- container start -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Inpatient Form</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><center>update Inpatient information</center></h1>
      </div>
    </div><!--/.row-->
        
                    <?php
                    		  $id=$_GET['did'];
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `inpatients` WHERE `p_id`='$id' ");  

                             $row=mysqli_fetch_array($qry)
                             
                                ?>

    <div class="row">
      <div class="col-lg-12">
      
        
         <form name="contact_form" class="default-form contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                    <input type="hidden" name="id" placeholder="Name" class="form-control" value="<?php echo $row['0']; ?>">
                                 
                                    <input type="text" name="name" placeholder=" Patient Name" class="form-control" value="<?php echo $row['1']; ?>" >
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $row['5']; ?>" >
                                </div>

                                <div class="form-group">
                                    <textarea name="address" placeholder="Address" class="form-control" value=""><?php echo $row['4']; ?></textarea>
                                </div>

                                 <div class="form-group">
                                     <label>user name</label>
                                    <input type="text" name="user_name" placeholder="username" class="form-control" value="<?php echo $row['8']; ?>" >
                                </div>         

                                 <div class="form-group">
                                     <label>Blood Group</label>
                                    <select name="blood_group" placeholder="blood_group" class="form-control" >
                                    <option value="<?php echo $row['11']; ?>"><?php echo $row['11']; ?></option>
                                      <option value="">select the blood group</option>
                                      <option value="A+">A+</option>
                                      <option value="O+">O+</option>
                                      <option value="B+">B+</option>
                                      <option value="AB+">AB+</option>
                                      <option value="A-">A-</option>
                                      <option value="O-">O-</option>
                                      <option value="B-">B-</option>
                                      <option value="AB-">AB-</option>
                                    </select> 
                                </div>                           
                            </div>              
                                                     
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="Contact No" class="form-control" value="<?php echo $row['2']; ?>" >
                                </div>

                                <div class="form-group">
                                    <input type="text" name="age" placeholder="age" class="form-control" value="<?php echo $row['3']; ?>" >
                                </div>    
                                
                                <div class="form-group" >
                                    <select name="gender" class="form-control">
                                        <option value="<?php echo $row['6']; ?>"><?php echo $row['6']; ?></option>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                    <select name="Doctor" class="form-control">
                                        <option value="<?php echo $row['7']; ?>"><?php echo $row['7']; ?></option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `staff`");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['1']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                    </select>
                                </div>  

                                <div class="form-group">
                                    <select name="Room" class="form-control">
                                        <option value="">Select the Room</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `rooms`");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['2']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                        
                                    </select>
                                </div>  

                                    
                                        
                                  <div class="form-group">
                                     <label>password</label>
                                    <input type="password" name="password" placeholder="password" class="form-control" value="<?php echo $row['9']; ?>" >
                                </div>                       
                            </div>

                           <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                     <label>Advance Payment</label>
                                    <input type="text" name="payment" placeholder="Advance Payment" class="form-control"  value="<?php echo $row['13']; ?>" >
                                </div> 

                                
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="treatment" placeholder="Treatment" class="form-control"  value=""><?php echo $row['12']; ?></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn-style-one">Update Patient details</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>                      
            </div>
            
        </div>
    </div>
    <!-- container end -->
</section>
                                   
<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';
      
      $id=$_POST['id'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $phone=$_POST['Phone'];
      $gender=$_POST['gender'];
      $age=$_POST['age'];
      $doctor=$_POST['Doctor'];
      $uname=$_POST['user_name'];
      $password=$_POST['password'];
      $ptype=$_POST['p_type'];
      $treatment=$_POST['treatment'];

      $qry=mysqli_query($con,"UPDATE `inpatients` SET `p_name`='$name',`phone`='$phone',`age`='$age',`address`='$address',`email`='$email',`gender`='$gender',`doctor`=' $doctor',`username`='$uname',`password`='$password',`Treatment`='$treatment' WHERE 1");

      if ($qry) 
      {
        echo "<script>alert('Patient info updated.');window.location='view_patient.php';</script>";
      }


      
  }

?>



	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>

</html>


        
        
                                

                                

                                 
                               
                            


                                

                               
                                 
                                
                            
