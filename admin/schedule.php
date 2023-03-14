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

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Doctor Name</label>
                                    <select name="doctor" class="form-control" required="">
                                        <option value="">Select the Doctor</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `staff` where`staff_type` ='Doctor'");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['1']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                    </select>
                                </div>  
                                
                                </div>
                              </div>

                                <div class="row">
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                 
                                
                                    <div class="form-group">
                                         <label>Start time</label>
                                         <input type="time" name="stime" id="stime" class="form-control" placeholder="Enter start time..." required="">
                                    </div>  
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                 
                                
                                    <div class="form-group">
                                         <label>End time</label>
                                        <input type="time" name="ttime" id="ttime" onblur="show12Hours();" class="form-control" placeholder="Enter end time..." required="">
                                    </div>  
                                </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit" name="insert" class="btn-style-one">Add Doctor schedule</button>
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


<?php include('connection.php'); 
            if(isset($_POST['insert']))
            {
              
                            $stime=$_POST['stime'];
                            $ttime=$_POST['ttime'];
                            $id=$_POST['doctor'];
                            $sr=mysqli_query($con,"SELECT * FROM schedule where d_id='$id'");
                            echo  $nums=mysqli_num_rows($sr);
                            if($nums >= 2)
                            {
                              echo '<script>alert("Already two schedules exist"); </script>';
                            }
                            else
                            {
                        $qry=mysqli_query($con,"INSERT INTO `schedule`(`sid`, `d_id`, `stime`, `etime`) VALUES ('','$id','$stime','$ttime')");
                        
                        if($qry)
                        {
                          echo '<script>alert("Success!.."); </script>';
                        }
                        else
                        {
                          echo '<script>alert("Failed...Try Again"); </script>';
                        }
               }
               
            }
           ?>