<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $r_id=$_POST['r_id'];
      $floor=$_POST['floor'];
      $room_no=$_POST['room_no'];
      $id=$_POST['room_no'];
     
      $price=$_POST['price'];

      // echo "UPDATE `rooms` SET `floor`='$floor',`room_no`='$room_no',`unit_price`='$price' WHERE `r_id`='$r_id'";

      $qry=mysqli_query($con,"UPDATE `rooms` SET `floor`='$floor',`room_no`='$room_no',`unit_price`='$price' WHERE `r_id`='$r_id'");

      if ($qry) 
      {
        echo "<script>alert('room info updated.');window.location='update.php';</script>";
      }


      
  }

?>

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
        <li class="active">update Rooms/Wards</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">form to update rooms/wards</h1>
      </div>
    </div><!--/.row-->
        
                    <?php
                    		    // $id=$_POST['id'];
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `rooms` ");  

                             $row=mysqli_fetch_array($qry);
                             
                                ?>
                                
                                <div class="row">
                                     <div class="col-lg-12">
      
        
        
                                  <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="col-md-6">
                                        <form role="form" method="post" action="">
                                          <div class="form-group">
                                            <div class="form-group">
                                                <input type="hidden" name="r_id" placeholder="id" value="<?php echo $row['r_id']; ?>">
                                                </div>

                                                <div>
                                                  <label>Floor</label>
                                                    <select name="floor" class="form-control">
                                                      <option value="<?php echo $row['1']; ?>"><?php echo $row['1']; ?></option>
                                                      <option value="">Select Floor</option>
                                                      <option value="first floor">First Floor</option>
                                                      <option value="second floor">Second Floor</option>
                                                      <option value="third floor">Third Floor</option>
                                                      </select>
                                                      </div>

                                                <div class="form-group">
                                                    <label>Room No</label>
                                                      <input readonly="" type="text" name="room_no" placeholder="Room No" class="form-control" value="<?php echo $row['2']; ?>" > 
                                                </div>
                                 
                                
                                  

                                 <div class="form-group">
                                 <label>Per day chrage</label>
                                     <input class="form-control" type="text" name="price" placeholder="Price" value="<?php echo $row['4']; ?>" >
                                </div>                           
                            </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn btn-danger">Update Room details</button>


                </div>
              </form>
              
            </div>

          </div>
        </div><!-- /.panel-->
      </div><!-- /.col--
    </div><!-- /.row -->

                             
                                   




	
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





    
    

                    
                  

                  


                   