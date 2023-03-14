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
				<li class="active">add department</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin Change Password</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="">
								<div class="form-group">
									
									<input type="password" class="form-control" name="opassword" placeholder="old password" data-rule="minlen:2" data-msg="Please enter password" />
								</div>
								<div class="form-group">
									
									<input type="password" class="form-control" name="npassword" placeholder=" new password" data-rule="minlen:2"  data-msg="Please enter password" />
								</div>
								<div class="form-group">
									
									<input type="password" class="form-control" name="cpassword" placeholder=" confirm password" data-rule="minlen:2" data-msg="Please enter password" />
								</div>
										
									<button type="submit" name="update_btn" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</form>
						</div>
							
						</div>
					</div>



					
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
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

</html>



<?php
  include 'connection.php';

  if (isset($_POST['update_btn'])) 
  {
   
    $opassword=$_POST['opassword'];
    $npassword=$_POST['npassword'];
    $cpassword=$_POST['cpassword'];

    if ($npassword==$cpassword) 
    { 
          // session_start();
          // $user_id=$_SESSION['user_id'];
          $qry1=mysqli_query($con,"SELECT * FROM `admin` WHERE `id`='$user_id' AND `password`='$opassword'");
          $nor=mysqli_num_rows($qry1);
          if ($nor==1) 
          {
                $qry=mysqli_query($con,"UPDATE `admin` SET `password`='$npassword' WHERE `id`='$user_id'");
                if ($qry) 
                {
                  echo "<script>alert('password changed .');window.location='logout.php';</script>";
                }
          }
          else
          {
            echo "<script>alert('wrong old password ');window.location='change_password.php';</script>";
          }
    }
    else
    {
          echo "<script>alert('new passwords are not matching');window.location='change_password.php';</script>";
    }
    
    
  }

?>


   
