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
        <li class="active">My Schedules</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">My schedule</h1>
      </div>
    </div><!--/.row-->

        <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> My schedules</div>
          <div class="panel-body">
            <div class="col-md-12">
              
                     <table class="table table-bordered" id="example">
                      <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Start Time</th>
                            <th>To Time</th>
                            <!-- <th>Action</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php include 'connection.php'; $i=1;
                          $sq=mysqli_query($con,"SELECT * FROM schedule where d_id='$user_id'");
                          while($row=mysqli_fetch_array($sq)){
                         ?>
                         <tr>
                          <td><?php echo $i++; ?></td>
                           <td><?php echo $row['stime']; ?></td>
                           <td><?php echo $row['etime']; ?></td>
                          <!-- <td><a href="upschedule.php?id=<?php echo $row['sid']; ?>" onclick="confirm('Are you sure to update it?');" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="delschedule.php?id=<?php echo $row['sid']; ?>" onclick="confirm('Are you sure to delete it?');" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td> -->
                         </tr>
                         <?php } ?>
                      </tbody>
                    </table>     

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

