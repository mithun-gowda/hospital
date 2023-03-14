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
     $presid=$_GET['pres_id'];
     $sq=mysqli_query($con,"SELECT * FROM prescription,user where pres_id='$presid' and prescription.user_id=user.u_id");
     $rows=mysqli_fetch_array($sq);
     $apid=$rows['ap_id'];
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
            
                 <div class="container-fluid">
      <h3 class="heading-agileinfo">Prescription Details</h3>
      <div class="container">
    <div class="row col-md-10">
      <div class="col-md-5" style="text-transform: capitalize; color: purple; ">
        <?php include('connection.php'); ?>
        Patient Name: <?php echo $rows['first_nm'].' '.$rows['last_nm'];  ?>
      </div>
      
    </div>
    <div class="row col-md-10">     
        <div class="col-md-4">
          <form action="" method="post">
            <div class="form-group">
              <label>Medicine Name</label>
            <input type="text" name="medicine" pattern="[A-Za-z0-9\s]+" title="Letters and digit only" required placeholder="enter Medicine Name" class="form-control">
            </div>
          <div class="form-group">
            <label>Prescribed For</label>
            <input type="text" name="prescribed_for" pattern="[A-Za-z\s]+" title="Letters" required placeholder="enter reason for medicine consumption" class="form-control">
              <label>Consuming Quantity</label>
            <input type="text" name="qty" id="qty" onblur="nonegative(this.value);" placeholder="enter the Qunatity per consumption" class="form-control">
          </div>
          <div class="form-group">
            <label>Consumption</label>
              <input type="radio" name="consume" value="before_food">Before Food
              <input type="radio" name="consume" value="after_food">After Food
          </div>
          <div class="form-group">
              <select multiple="true" name="schedule[]" class="form-control">
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
              </select>
          </div>
          <div class="form-group">
            <label>Number of Days</label>
            <input type="text" name="days" id="nodays" onblur="nonegative1(this.value);" placeholder="enter the number of days" class="form-control">
          </div>
            <input type="submit" name="add" class="btn btn-success" value="Add">
          </form>
          <?php include 'connection.php';
          if(isset($_POST['add']))
          {
            
            $mname=$_POST['medicine'];
            $days=$_POST['days'];
            $qty=$_POST['qty'];
            $consume=$_POST['consume'];
            $disease=$_POST['prescribed_for'];
              foreach ($_POST['schedule'] as $key => $value) {
                $sql=mysqli_query($con,"INSERT INTO `pres_details`(`pdid`, `pres_id`, `med_name`,`disease`, `qty`, `before_after`, `consume_for`, `days`) VALUES ('','$presid','$mname','$disease','$qty','$consume','$value','$days')") or die(mysqli_error($con));

              }
              echo '<script>alert("Noted!!!!!!"); window.location="pres_details.php?pres_id='.$presid.'";</script>';
          }
          ?>
       </div>
      <div class="col-md-6">
      <form action="" method="post">
          <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Medicine</th>
                  <th>Qty</th>
                  <th>Reason</th>
                  <th>Consumption</th>
                  <th>Before/After</th>
                  <th>Action</th>
                </tr>
               </thead>
               <tbody>
                <?php include('connection.php');
                $i=1;
                  $qry=mysqli_query($con,"SELECT distinct pres_details.`med_name`,pres_details.`qty`, pres_details.`disease`,pres_details.`consume_for`,pres_details.`before_after`,pdid from pres_details,prescription where pres_details.`pres_id`='$presid' group by pres_details.`pdid`") or die(mysqli_error($con));
                  while($row=mysqli_fetch_array($qry)){
                 ?>
                 <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['med_name']; ?></td>
                  <td><?php echo $row['qty']; ?></td>
                  <td><?php echo $row['disease']; ?></td>
                  <td><?php echo $row['consume_for']; ?></td>
                  <td><?php echo $row['before_after']; ?>
                  </td>
                  <td>
                    <a href="delprescription.php?pdid=<?php echo $row['pdid'];?>" class="btn btn-danger"><i class="fa fa-close"></i></a> 
                  </td>
                  
                  
                 </tr>
                 <?php } ?>
                 <tr>
                  <td colspan="7">
                    <input type="submit" name="save" class="btn btn-info" value="Done">
                  </td>
                 </tr>
               </tbody>
              </table>
              </form>
               <?php if(isset($_POST['save']))
                 {
                  $sql=mysqli_query($con,"UPDATE prescription SET pstatus='done' where pres_id='$presid'");
                  $sqlr=mysqli_query($con,"UPDATE appointment SET status='prescribed' where ap_id='$apid'");
                  if($sql)
                  {
                    echo '<script>alert("Prescription note is completed"); window.location="prescription.php"; </script>';
                  }
                  
                 }
                  ?>
       </div>
        
        <div class="clearfix"> </div>
      </div>
<!-- //single -->
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
	<script type="text/javascript">
        function nonegative(a)
        {
          if(a<=0)
          {
            document.getElementById('qty').value= 1;
          }
          else
          {
            return true; 
          }
        }
        </script>
        <script>
        function nonegative1(a)
        {
          if(a<=0)
          {
            document.getElementById('nodays').value= 1;
          }
          else
          {
            return true; 
          }
        }
       </script>
</body>

</html>

