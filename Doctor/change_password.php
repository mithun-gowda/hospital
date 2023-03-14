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
<body >
	
	<?php 

		include 'header.php';

	?>


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Change Password</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Change Password</h1>
      </div>
    </div><!--/.row-->

        <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> </div>
          <div class="panel-body">
            <div class="col-md-12">
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                  <label>Old password</label>
                  <input type="password" name="opwd" class="form-control" placeholder="Enter old password..." required="">
                  </div>
                  <div class="form-group">
                  <label>New password</label>
                  <input type="password" name="npwd" class="form-control" placeholder="Enter new password..." required="">
                  </div>
                  <div class="form-group">
                  <label>Confirm password</label>
                  <input type="password" name="cpwd" class="form-control" placeholder="Enter confirm password..." required="">
                  </div>
                  
                  
                  <input type="submit" name="insert" class="btn btn-success" value="Change">
                 </form>
                          
                 <?php include('connection.php'); 
                    if(isset($_POST['insert']))
                    {
                      
                                    $npwd=$_POST['npwd'];
                                    $opwd=$_POST['opwd'];
                                    $cpwd=$_POST['cpwd'];
                                    $sr=mysqli_query($con,"SELECT * FROM staff where password='$opwd' and s_id='$user_id'");
                                    $nums=mysqli_num_rows($sr);
                                    if($nums==1)
                                    {
                                      if($cpwd==$npwd)
                                      {
                                        $qry=mysqli_query($con,"UPDATE staff SET password='$npwd' where s_id='$user_id'");
                                
                                          if($qry)
                                          {
                                            echo '<script>alert("Success!.."); window.location="logout.php"; </script>';
                                          }
                                          else
                                          {
                                            echo '<script>alert("Failed...Try Again"); </script>';
                                          }
                                                }
                                                else
                                          {
                                            echo '<script>alert("Password Mismatch"); </script>';
                                          }
                                          
                                 }
                                else
                                {
                                  echo '<script>alert("Old Password is incorrect"); </script>';
                                }
                       
                    }
                   ?>
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

