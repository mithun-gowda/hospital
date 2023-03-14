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
				<li class="active">Add Staff</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3" style="background: #159957;  /* fallback for old browsers */
                                                  background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
                                                  background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                  padding: 20px;
                                                    ">
			     <div class="row">
              <div class="col-lg-12">
                <a href="view_doctor.php" class="btn btn-warning btn-block">show Staff</a>
                <h1 class="page-header" style="color:white;"><center>Form to add Staff</center></h1>
              </div>
            </div><!--/.row-->
				
				 <form name="contact_form" class="default-form contact-form" action="" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required="">
                                </div>

                                <div class="form-group" >
                                    <select name="subject" class="form-control" required="">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>  
                                
                                <div class="form-group">
                                    <select name="department" class="form-control" required="">
                                      <option value=""> select department </option>
                                      <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `department`");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                                 <option value="<?php echo $row['dept_id']; ?>"><?php echo $row['1']; ?></option>
                                              

                                            <?php
                                          }

                                      ?>

                                        
                                       
                                        
                                    </select>
                                </div> 

                                
                                 <div class="form-group">
                                     <label>user name</label>
                                    <input type="text" name="user_name" placeholder="username" class="form-control" required="">
                                </div>                           
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="Phone" class="form-control" required="">
                                </div>
                                <div class="form-group" >
                                     <select name="degree" class="form-control" required="">
                                        <option value="">Select Degree</option>
                                        <option value="mbbs">MBBS</option>
                                        <option value="md">MD</option>
                                        <option value="md">MDS</option>
                                        <option value="md">MS</option>
                                        <option value="md">DO</option>
                                        <option value="md">PHD</option>
                                        <option value="md">DDS</option>
                                        <option value="md">BN</option>
                                        <option value="md">DPT</option>


                                    </select>
                                </div> 
                                

                                <div class="form-group">
                                    <select name="type" class="form-control" required="">
                                        <option value="">Select staff</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Nurse">nurse</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                     <label></label>
                                    <input type="file" name="img" placeholder="password" class="form-control" required="">
                                </div>  
                                
                                  <div class="form-group">
                                     <label>password</label>
                                    <input type="password" name="password" placeholder="password" class="form-control" required="">
                                </div>                       
                            </div>
                            </div>    
                                
                            
                                <div class="form-group">
                                    <textarea name="form_message" placeholder="About Staff" class="form-control" required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit" name="btn_save" class="btn-style-one">save Doctor details</button>
                                </div>                            
                            
                       
                    </form>
				  </div>
                   
                    
			
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
      $Phone=$_POST['Phone'];
      $email=$_POST['email'];
      $degree=$_POST['degree'];
      $dept=$_POST['department'];
      $gender=$_POST['subject'];
      $type=$_POST['type'];
      
      $uname=$_POST['user_name'];
      $password=$_POST['password'];
      $abt_d=$_POST['form_message'];

      $file = rand(1000,100000)."-".$_FILES['img']['name'];
      $file_loc = $_FILES['img']['tmp_name'];
      $file_size = $_FILES['img']['size'];
      $file_type = $_FILES['img']['type'];
      $folder="uploads/";
      // new file size in KB
      $new_size = $file_size/2048;  
      // new file size in KB
                                  
     // make file name in lower case
     $new_file_name = strtolower($file);
                                  // make file name in lower case
           
      $final_file=str_replace(' ','-',$new_file_name);
                                  
   if(move_uploaded_file($file_loc,$folder.$final_file))
    {// Start of if image file upload successful

      $qry=mysqli_query($con,"INSERT INTO `staff`(`s_id`, `s_name`, `phone`, `email`, `degree`, `department`, `gender`, `staff_type`,`username`, `password`, `about`,`staff_image`) VALUES ('','$name','$Phone','$email','$degree','$dept','$gender','$type', '$uname','$password','$abt_d','$final_file')");

      if ($qry) 
      {
        echo "<script>alert('staff info addded.')</script>";
      }
  }

      
  }

?>