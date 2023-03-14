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

  <?php
  include 'connection.php';
  $id=$_GET['id'];
  $sql=mysqli_query($con,"SELECT * FROM schedule where sid='$id'");
  $rows=mysqli_fetch_array($sql);
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Manage Schedule</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3" style="background: #159957;  /* fallback for old browsers */
                                                  background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
                                                  background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                  padding: 20px;
                                                    ">
			     <div class="row">
            <a class="btn btn-success" href="view_schedule.php" class="btn-style-one">view schedules</a>
              <div class="col-lg-12">
                <h1 class="page-header" style="color:white;"><center>Doctor Schedule</center></h1>
              </div>
            </div><!--/.row-->
				
				 <form name="" class="default-form contact-form" action="" method="post">
                      

                                <div class="row">
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                 
                                
                                    <div class="form-group">
                                         <label>Start time</label>
                                         <input type="time" name="stime" id="stime" class="form-control" value="<?php echo $rows['stime']; ?>" placeholder="Enter start time..." required="">
                                    </div>  
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                 
                                
                                    <div class="form-group">
                                         <label>End time</label>
                                        <input type="time" name="ttime" value="<?php echo $rows['etime']; ?>" id="ttime" onblur="show12Hours();" class="form-control" placeholder="Enter end time..." required="">
                                    </div>  
                                </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit" name="update" class="btn-style-one">Add Doctor schedule</button>
                                </div>                            
                            
                       
                    </form>
                    <?php include('connection.php'); 
                        if(isset($_POST['update']))
                        {
                          
                                        $stime=$_POST['stime'];
                                        $ttime=$_POST['ttime'];
                                       
                                    $qry=mysqli_query($con,"UPDATE schedule SET `stime`='$stime', `etime`='$ttime' where sid='$id'");
                                    
                                    if($qry)
                                    {
                                      echo '<script>alert("Success!.."); window.location="schedule.php"; </script>';
                                    }
                                    else
                                    {
                                      echo '<script>alert("Failed...Try Again"); </script>';
                                    }
                          }
                       ?>
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


