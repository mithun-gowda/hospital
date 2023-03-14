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
<body style="background: url('img/136934.jpg'); background-size: cover;">
	
	
		
	<div class="container">
		


		<div class="row">
			<div class="col-lg-6 col-lg-offset-3" style="background: #159957;  /* fallback for old browsers */
                                                  background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
                                                  background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                  padding: 100px 20px;
                                                    ">
			     <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header" style="color:white;"><center>Admin Login</center></h1>
                <hr>
              </div>
            </div><!--/.row-->
				
				 <form name="contact_form" class="default-form contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="user_name" required="" placeholder="Name" class="form-control" >
                                </div>
                                                           
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="password" required="" name="password" placeholder="Password" class="form-control" >
                                </div>
                                
                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit" name="btn_save" class="btn-style-one">Login</button>
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
      		
    		$user_name=$_POST['user_name'];
        	$password=$_POST['password'];
      		
      		$qry=mysqli_query($con,"SELECT * FROM `admin` WHERE `user_name`='$user_name' AND `password`='$password'");
            $rows=mysqli_num_rows($qry);
            $row=mysqli_fetch_array($qry);

            if ($rows==1) 
            { 
              session_start();
              $_SESSION['user_id']=$row['id'];
              $_SESSION['user_type']='admin';
               echo "<script>alert('admin login success.');window.location='index.php';</script>";
            }
            else
            {
                echo "<script>alert('username and password are not matching!');window.location='admin_login.php';</script>";
            }


      
  }

?>