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
        <li class="active">View Appointment</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Todays Appointments</h1>
      </div>
    </div><!--/.row-->

        <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> Appointment List</div>
          <div class="panel-body">
            <div class="col-md-12">
              <table class="table table-bordered" id="example">
        <thead>
          <tr>
              <th>SL NO</th>
              <th>Patient</th>
              <th>contact</th>
              <th>App_date</th>
              <th>Purpose</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'connection.php'; $i=1; $tdate=date('Y-m-d');
          // echo $user_id;
             $sq=mysqli_query($con,"SELECT * FROM appointment,user where user.u_id=appointment.user_id and did='$user_id' and status!='prescribed' and bookingfor='$tdate' order by booktime asc");
             while($row=mysqli_fetch_array($sq)){
           ?>
           <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['first_nm']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['bookingfor'].' '.$row['booktime']; ?></td>
             <td><?php echo $row['purpose']; ?></td>
             <td>
              <?php $st=$row['status'];
                if($st=='booked')
                {
               ?>
                Not confirmed yet by admin
                <!-- <a href="confirmapp.php?apid=<?php echo $row['ap_id']; ?>" class="btn btn-success">Confirm</a><a href="rejectapp.php?apid=<?php echo $row['ap_id']; ?>" onclick="return confirm('Sure to cancel the appointment?'); " class="btn btn-warning">Reject</a> -->
              <?php }else if($st=='confirmed'){ ?>
                <span style="color: green; font-weight: bold;">Confirmed</span>
              <?php }else if($st=='cancelled'){ ?>
                <span style="color: red; font-weight: bold;">Cancelled</span>
              <?php } ?>
             </td>
             
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

