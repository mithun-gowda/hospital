
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
		
	<section class="section contact">
    <!-- container start -->
  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">update department</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">form to update departments</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row">
      <div class="col-lg-12">
                    <?php
                    		  $id=$_GET['did'];
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `department` WHERE `dept_id`='$id' ");  

                             $row=mysqli_fetch_array($qry)
                             
                                ?>  

                                <div class="row">
                                <div class="col-lg-12">
      
        
        
                            <div class="panel panel-default">
                              <div class="panel-heading">Forms</div>
                                <div class="panel-body">
                                  <div class="col-md-6">
                                    <form role="form" method="post" action="">
                                      <div class="form-group">
                                        <div class="form-group">
                                    <input type="hidden" name="id" placeholder="Name" class="form-control" value="<?php echo $row['0']; ?>">
                  
                                        <input type="Text" name="name" class="form-control" placeholder="Dept Name" value="<?php echo $row['1']; ?>">
                                          </div>

                                <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn-style-one">Update department details</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>                      
            </div>
            
        </div>
    </div>
    <!-- container end -->
</section>
                                   
<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';
      
      $id=$_POST['id'];
      $name=$_POST['name'];
      
      $qry=mysqli_query($con,"UPDATE `department` SET `dept_name`='$name' WHERE `dept_id`='$id'");

      if ($qry) 
      {
        echo "<script>alert('Department info updated.');window.location='add_dept.php';</script>";
      }


      
  }

?>



	
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




      
        
       

         