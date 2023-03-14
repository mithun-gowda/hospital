<!DOCTYPE html>
<html>

<!-- Mirrored from medialoot.com/preview/lumino/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 06:38:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospitech</title>
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
        <li class="active">Add Rooms/Wards</li>
      </ol>
    </div><!--/.row-->



    <div class="row">
      <div class="col-lg-6 col-lg-offset-3" style="background: #159957;  /* fallback for old browsers */
                                                  background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25,                Safari 5.1-6 */
                                                  background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                  padding: 20px;
                                                    ">
           <div class="row">
              <div class="col-lg-12">
                <a href="view_rooms.php" class="btn btn-warning btn-block">view rooms/wards</a>
                <h1 class="page-header" style="color:white;"><center>Form to add Rooms/Wards</center></h1>
              </div>
            </div><!--/.row-->
    
    
    


    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class=" panel-default" style="color:white;">

          <div class="panel-body">
            <div class="col-md-12">
              <form role="form" method="post" action="">
                <div class="form-group">
                  
                   <label>Floor</label>
                                    <select name="floor" class="form-control">
                                        <option value="">Select Floor</option>
                                        <option value="first floor"> First Floor</option>
                                        <option value="second floor">Second Floor</option>
                                        <option value="third floor">Third Floor</option>
                                    </select>
                </div>
                      <div class="form-group">
                        <label>Room Type</label>
                                          <select name="room_type" class="form-control" onchange="change_price(this.value)">
                                            <option value="">Select Room</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Medium">Medium</option>
                                            <option value="VIP">VIP</option>
                                        </select>
                      </div>
                    <div class="form-group">
                    <label>Room No</label>
                    <?php
                          include 'connection.php';
                          $result = mysqli_query($con, "SELECT MAX(room_no) FROM rooms");
                          $row = mysqli_fetch_array($result);
                          $max=$row[0] +1;
                    ?>
                                        
                                         <input type="text" readonly="" name="room_no" placeholder="Room No" class="form-control" value="<?php echo $max;  ?>" > 
                    </div>

                    
<!--  -->
                  

                    <div class="form-group">
                                    <label>Per day/ Price</label>
                                    
                                      <input type="text" id="price" name="price" placeholder="Price" class="form-control" > 
                                </div>



                   <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn btn-lg btn-success btn-block">save Room details</button>
                   </div>  
                  <button type="reset" class="btn btn-default">Reset</button>
                  
                </div>
              </form>
              
            </div>

          </div>
        </div><!-- /.panel-->
      </div><!-- /.col--
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
    function change_price(v) 
    {
          if (v=="Normal") 
          {
              document.getElementById('price').value='1000';
          }
          else if (v=="Medium") 
          {
               document.getElementById('price').value='2000';
          }
          else if (v=="VIP") 
          {
                   document.getElementById('price').value='4000';
          }
          
    }
  </script>
  
</body>

<!-- Mirrored from medialoot.com/preview/lumino/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 06:38:25 GMT -->
</html>
  


<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $floor=$_POST['floor'];
      $room_no=$_POST['room_no'];
      $price=$_POST['price'];
      $room_type=$_POST['room_type'];

     $qry=mysqli_query($con,"INSERT INTO `rooms`(`r_id`, `floor`, `room_no`,`room_type`, `unit_price`) VALUES ('','$floor','$room_no','$room_type','$price')");
      if ($qry) 
      {
        echo "<script>alert('ward details inserted .');window.location='add_rooms.php';</script>";
      }


      
  }

?>