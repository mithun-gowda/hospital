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
        <h1 class="page-header">Prescriptions</h1>
      </div>
    </div><!--/.row-->

        <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> Prescriptions</div>
          <div class="panel-body">
            <div class="col-md-12">
              
                   <table class="table table-bordered" id="example">
                    <thead>
                      <tr>
                          <th>Delete Action</th>
                          <th>SL NO</th>
                          <th>Patient</th>
                          <th>contact</th>
                          <th>Date</th>
                          <th>Prescribed medicine</th>
                          <th>Purpose</th>
                           <th>Consume</th>
                          <th>Days</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'connection.php'; $i=1;
                         $sq=mysqli_query($con,"SELECT * FROM prescription,user where prescription.user_id=user.u_id AND prescription.did='$user_id' order by pdate desc");
                         while($row=mysqli_fetch_array($sq)){
                          $pres_id=$row['pres_id'];
                          $sqr=mysqli_query($con,"SELECT * from pres_details where pres_id='$pres_id'");
                          $rows=mysqli_num_rows($sqr);
                          if($rows >=1)
                          {
                       ?>
                       <tr>
                          <td rowspan="<?php echo $rows; ?>"><a href="delpres.php?pres_id=<?php echo $pres_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure delete the prescription'); "><i class="fa fa-trash-o"></i></a></td>
                        <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $i++; ?></td>
                        <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $row['first_nm'].' '.$row['last_nm']; ?></td>
                        <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $row['contact']; ?></td>
                        <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo date('d-m-Y',strtotime($row['pdate'])); ?></td>
                        <?php while($fetch=mysqli_fetch_array($sqr)) {?>
                        <td><?php echo $fetch['med_name']; ?></td>
                         <td><?php echo $fetch['disease']; ?></td>
                         <td><?php echo $fetch['consume_for']; ?></td>
                         <td><?php echo $fetch['days']; ?></td>
                         
                       </tr>
                       <?php } } }?>
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

