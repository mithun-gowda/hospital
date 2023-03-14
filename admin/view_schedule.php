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
        <h1 class="page-header">form to View Doctor Schedule</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row">
      <div class="col-lg-12">
      
        <div class="panel panel-default">
          <div class="panel-heading"> Doctor Select</div>
          <div class="panel-body">
            <div class="row">
                            <form method="post" action=""> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                  <label>Doctor Name</label>
                                    <select name="doctor" class="form-control" required="">
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
                                  <button class="btn btn-success" type="submit" name="show" class="btn-style-one">SHow</button>
                                </div>
                              </form>
                              </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading"> Doctor Schedule  <a class="btn btn-success" href="schedule.php" class="btn-style-one">Add  schedules</a></div>
          <div class="panel-body">

            <div class="col-md-12">
              <?php
                if (isset($_POST['show'])) 
                {
                  $id=$_POST['doctor'];
              ?>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <!-- <th>ID</th> -->
                          
                          <th>From</th>
                          <th>To</th>
                          <th>Doctor Name</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `schedule`,`staff` WHERE `schedule`.`d_id`=`staff`.`s_id` AND `staff`.`s_id`='$id'  ");  
                            
                              while ($row=mysqli_fetch_array($qry)) 
                              {
                                ?>
                                   <tr>
                                    <!-- <td><?php echo $row['0']; ?></td> -->
                                    
                                    <td><p class="btn btn-warning"><?php echo $row['2']; ?></p></td>
                                    <td><p class="btn btn-warning"><?php echo $row['3']; ?></td>
                                    <td><?php echo $row['s_name']; ?></td>
                                    <td><a href="upschedule.php?id=<?php echo $row['sid']; ?>" onclick="confirm('Are you sure to update it?');" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="delschedule.php?id=<?php echo $row['sid']; ?>" onclick="confirm('Are you sure to delete it?');" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>

                                  </tr>

                                <?php
                              }

                          ?>

                       
                        
                      </tbody>
                    </table>
              <?php
                }else
                {
                  echo "select the doctor to view the scheduling details";
                }

              ?>
              
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
