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
        <li class="active">view schedule</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Deleting the data</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row">
      <div class="col-lg-12">
      
        <div class="panel panel-default">
          <div class="panel-heading"> Doctor delete</div>
          <div class="panel-body">
            <div class="row">
                            <form method="post" action="delete_doctor.php"> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Doctor Delete</label>
                                    <select name="did" class="form-control" required="">
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
                                <div class="col-md-3 col-sm-12 col-xs-12"><br>
                                  <button onclick="return confirm('are you sure?');" class="btn btn-success" type="submit" name="btn_doctor" class="btn-style-one">Delete</button>
                                </div>
                              </form>
                              </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading"> Delete Rooms/wards</div>
          <div class="panel-body">
            <div class="row">
                            <form method="post" action="delete_room.php"> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Delete Rooms/Wards</label>
                                    <select name="did" class="form-control" required="">
                                        <option value="">Select the Room</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `rooms`");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['2']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                    </select>
                                </div>  
                                
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12"><br>
                                  <button onclick="return confirm('are you sure?');" class="btn btn-success" type="submit" name="btn_doctor" class="btn-style-one">Delete</button>
                                </div>
                              </form>
                              </div>
          </div>
        </div>
        
      <div class="panel panel-default">
          <div class="panel-heading"> Delete Department</div>
          <div class="panel-body">
            <div class="row">
                            <form method="post" action="delete_dept.php"> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Delete Department</label>
                                    <select name="did" class="form-control" required="">
                                        <option value="">Select the Department</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `department`");  

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
                                <div class="col-md-3 col-sm-12 col-xs-12"><br>
                                  <button class="btn btn-success" type="submit" name="btn_dept" class="btn-style-one">Delete</button>
                                </div>
                              </form>
                              </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading"> Delete Inpatient</div>
          <div class="panel-body">
            <div class="row">
                            <form method="post" action="delete_patient.php"> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Delete Inpatient</label>
                                    <select name="did" class="form-control" required="">
                                        <option value="">Select the patient</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `inpatients`");  

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
                                <div class="col-md-3 col-sm-12 col-xs-12"><br>
                                  <button class="btn btn-success" type="submit" name="btn_doctor" class="btn-style-one">Delete</button>
                                </div>
                              </form>
                              </div>
          </div>
        </div>
        
        

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
