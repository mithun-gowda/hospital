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
        <li class="active">Appointment Report</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"></h1>
      </div>
    </div><!--/.row-->

        <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> Appointment Report</div>
          <div class="panel-body">
            <div class="col-md-12">
              	<div class="container-fluid">
					
					
					
				<div class="col-md-12 about-w3left" style=";">
					<div class="row">
								<div class="col-md-12">
									<form name="" method="post" action="">
										<div class="col-md-8">
										<div class="row">
											<div class="form-group col-md-6">
												<label> Doctor: </label>
												<select name="doctor" class="form-control">
												<option>Doctor Name</option>
													<?php include('connection.php');
														$sq=mysqli_query($con, "SELECT * from staff WHERE `staff_type`='Doctor'");
														while($fetch=mysqli_fetch_array($sq)) {
													 ?>
													 <option value="<?php echo $fetch['s_id']; ?>"><?php echo $fetch['s_name']; ?></option>
													 <?php } ?>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label> Date: </label>
												<input type="date" class="form-control input-sm" name="date" >
											</div>
										</div>
										<input type="submit" name="search_by_doc" style="margin-top: -18px;" class="btn btn-primary btn-block" value="Search"><br>
										</div>		
										
									</form>
											
											
									<form name="" method="post" action="">
									<div class="col-md-4">
											<label> Search By Month: </label>
												<select class="form-control input-sm" name="month">
													<option value ="01"> January </option>
													<option value ="02"> February </option>
													<option value ="03"> March </option>
													<option value ="04"> April </option>
													<option value ="05"> May </option>
													<option value ="06"> June </option>
													<option value ="07"> July </option>
													<option value ="08"> August </option>
													<option value ="09"> September </option>
													<option value ="10"> October </option>
													<option value ="11"> November </option>
													<option value ="12"> December </option>
													
												</select>
												<br>

									        <input type="submit" name="search_by_month" class="btn btn-primary btn-block" value="Search"><br>
									</div>
									</form>
									
								</div>
								</div>
						<hr>

						<?php
							if(isset($_POST['search_by_doc']))
							{
								
						?>
						<div id='DivIdToPrint'>
						<table class="table table-hover table-bordered table-striped" id="example">
						<thead>
							<tr>
								<th>SL no</th>
								<th>Patient</th>
								<th>Contact</th>
								<th>Purpose</th>
								<th>Appdate</th>
								<th>Status</th>	
							</tr>
						</thead>
						
						<tbody>
							<?php
								$date = $_POST['date'];
								$did = $_POST['doctor'];
								include "connection.php";
								$query = mysqli_query($con,"SELECT  user.`first_nm`,user.`last_nm`,user.`contact`,purpose,bookingfor,booktime,status  FROM user,appointment,staff where staff.s_id=appointment.did and user.u_id=appointment.user_id and appointment.`did`='$did' and bookingfor='$date' group by ap_id");
								
								$i=1;
								while($row = mysqli_fetch_array($query)){
							?>

							<tr>
								<td> <?php echo $i++; ?> </td>
								<td> <?php echo $row['first_nm'].' '.$row['last_nm']; ?> </td>
								<td> <?php echo $row['contact']; ?> </td>
								<td> <?php echo $row['purpose']; ?> </td>
								<td> <?php echo $row['bookingfor'].' '.$row['booktime']; ?> </td>
								<td> <?php echo $row['status']; ?> </td>
								
								
								
							</tr>
							
							<?php } ?>
						<tbody>	
					</table>

					
					<div class="well">
					<?php 
					$rr = mysqli_query($con,"SELECT SUM(ap_id) FROM `appointment` where did='$did' and bookingfor='$date'");
					$sum = mysqli_fetch_array($rr);

					$count = mysqli_num_rows($query); ?>
					
						<p><h4><b>Total Apppointments for  <?php echo date('d-m-Y',strtotime($date)); ?>: <?php echo $count; ?></b></h4></p>
					</div>
					</div>
					<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
					<!-- /.row -->
					<?php 
							}else if(isset($_POST['search_by_month']))
							{
								
						?>
					<div id="DivIdToPrint">
						<table class="table table-hover table-bordered table-striped" id="example">
						<thead>
							<tr>
								<th>SL no</th>
								<th>Doctor</th>
								
								<th>Patient</th>
								<th>Contact</th>
								<th>Purpose</th>
								<th>Appdate</th>
								<th>Status</th>
									
							</tr>
						</thead>
						
						<tbody>
							<?php
								$month = $_POST['month'];
								include "connection.php";
								$query = mysqli_query($con,"SELECT * FROM appointment,staff where staff.s_id=appointment.did and month(bookingfor)='$month' group by ap_id");
								
								$i=1;
								while($row = mysqli_fetch_array($query)){
							?>

							<tr>
								<td> <?php echo $i++; ?> </td>
								<td> <?php echo $row['s_name'] ?> </td>
								
								<?php $uid=$row['user_id'];
									$sr=mysqli_query($con,"SELECT * FROM user where u_id='$uid'");
									$read=mysqli_fetch_array($sr);
								?>
								<td> <?php echo $read['first_nm'].' '.$read['last_nm']; ?> </td>
								<td> <?php echo $read['contact']; ?> </td>
								<td> <?php echo $row['purpose']; ?> </td>
								<td> <?php echo $row['bookingfor'].' '.$row['booktime']; ?> </td>
								<td> <?php echo $row['status']; ?> </td>
								
								
								
							</tr>
							
							<?php } ?>
						<tbody>	
					</table>

					
					<div class="well">
					<?php 
					$rr = mysqli_query($con,"SELECT SUM(ap_id) FROM `appointment` where month(bookingfor)='$month'");
					$sum = mysqli_fetch_array($rr);

					$count = mysqli_num_rows($query); ?>
					
						<p><h4><b>Total Apppointments for  <?php echo $month. ' Month '; ?>: <?php echo $count; ?></b></h4></p>
					</div>
					</div>
					<input type='button' class="btn btn-primary btn-sm" id='btn' value='ok' onclick='printDiv();'>

					<!-- /.row -->
					<?php 
							}
					?>	
				</div>
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

