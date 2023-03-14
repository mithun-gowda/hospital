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
				<h1 class="page-header">form to add departments</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="">
								<div class="form-group">
									
									<input type="Text" name="name" class="form-control" placeholder="Dept Name">
								</div>

										
									<button type="submit" name="btn_save" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</form>
						</div>
							
						</div>
					</div>

					<?php
     
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $name=$_POST['name'];
      
      $qry=mysqli_query($con,"INSERT INTO `department`(`dept_id`, `dept_name`) VALUES ('','$name')");

       if ($qry) 
      {
        echo "<script>alert('department info addded.');window.location='add_dept.php';</script>";
      }

      
  }

?>





					<div class="panel panel-default">
          <div class="panel-heading"> Department detail</div>
          <div class="panel-body">
            <div class="col-md-12">
              <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>dept_name</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `department`");  

                              while ($row=mysqli_fetch_array($qry)) 
                              {
                                ?>
                                   <tr>
                                    <td><?php echo $row['dept_id']; ?></td>
                                    <td><?php echo $row['1']; ?></td>
                                   
                                    <td> <a onclick="return confirm('are you sure?');" class="btn btn-danger" href="delete_dept.php?did=<?php echo $row['dept_id']; ?>">Delete</a>    </td>
                                    <td> <a class="btn btn-danger" href="update_dept.php?did=<?php echo $row['dept_id']; ?>">Update</a>    </td>

                                  </tr>

                                <?php
                              }

                          ?>

                       
                        
                      </tbody>
                    </table>
            </div>
          </div>
        </div><!-- /.panel-->
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
