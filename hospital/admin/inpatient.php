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
				<h1 class="page-header"><center>Inpatient Form</center></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				 <form name="contact_form" class="default-form contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder=" Patient Name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <textarea name="address" placeholder="Address" class="form-control" ></textarea>
                                </div>

                                 <div class="form-group">
                                     <label>user name</label>
                                    <input type="text" name="user_name" placeholder="username" class="form-control" >
                                </div> 
                                <div class="form-group">
                                     <label>Blood Group</label>
                                    <select name="blood_group" placeholder="blood_group" class="form-control" >
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
                                    <input type="text" name="Phone" placeholder="Contact No" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <input type="text" name="age" placeholder="age" class="form-control" >
                                </div>    
                                
                                <div class="form-group" >
                                    <select name="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                    <select name="Doctor" class="form-control">
                                        <option value="">Select the Doctor</option>
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
                                          $qry=mysqli_query($con,"SELECT * FROM `rooms` where availability='available'");  

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
                                    <input type="password" name="password" placeholder="password" class="form-control" >
                                </div>                       
                            </div>
                            </div>  
                                
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                     <label>Advance Payment</label>
                                    <input type="text" name="payment" placeholder="Advance Payment" class="form-control" >
                                </div> 

                                <div class="form-group">
                                    <textarea name="treatment" placeholder="Treatment" class="form-control" ></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn btn-lg btn-success btn-block">Save</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
				 
                   
                    
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>

<!-- Mirrored from medialoot.com/preview/lumino/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 06:38:25 GMT -->
</html>



<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $name=$_POST['name'];
      $Room=$_POST['Room'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $phone=$_POST['Phone'];
      $gender=$_POST['gender'];
      $age=$_POST['age'];
      $doctor=$_POST['Doctor'];
      $uname=$_POST['user_name'];
      $password=$_POST['password'];
      $treatment=$_POST['treatment'];
      $blood_group=$_POST['blood_group'];
      $payment=$_POST['payment'];

      $qry=mysqli_query($con,"INSERT INTO `inpatients`(`p_id`, `p_name`, `phone`, `age`, `address`, `email`, `gender`, `doctor`, `username`, `password`, `patient_type`,`blood_group`, `Treatment`,`advance_payment`,`room`) VALUES  ('','$name','$phone','$age','$address','$email','$gender','$doctor','$uname','$password','Inpatient','$blood_group','$treatment','$payment','$Room')");

      $q2=mysqli_query($con,"UPDATE `rooms` SET `availability`='not-available' WHERE `r_id`='$Room'");

      if ($qry &&  $q2) 
      {
        echo "<script>alert('Inpatient info addded.')</script>";
      }


      
  }

?>