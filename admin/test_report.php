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
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  
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
        <li class="active">view doctor</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Patient Reports</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> Filter data</div>
          <div class="panel-body">
              <form method="post" action="">
                <div class="row"> 
                  <div class="col-md-12">
                    <label>Select the patient</label>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-8">
                                    <select name="pid" class="form-control">
                                        <option value="">Select inpatient</option>
                                        <?php
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `inpatients` WHERE `status`='in' ");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['1']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                  <!-- <label>&nbsp;</label> -->
                                  <div class="form-group">
                                      <input type="submit" name="search" class="btn btn-danger" value="show">
                                  </div>
                                </div>
                      </div>
                </div>
              </form>
                
                
            
        </div><!-- /.panel-->
      </div><!-- /.col-->
    </div><!-- /.row -->
  </div>

    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> report data 
            </div>
          <div class="panel-body">
            <div class="col-md-12">
              <div class="table-responsive">
                <?php

                  if (isset($_POST['search'])) 
                  {

                    $pid=$_POST['pid'];
                ?>
                    <table class="table table-hover" id="myTable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          
                          <th>test_name</th>
                          <th>technology used</th>
                          <th>amount charged</th>
                          <th>result</th>
                          <th>Taken date</th>
                          
                          

                        </tr>
                      </thead>
                      <tbody>
                          <?php
                                $pid=$_POST['pid'];
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `test_report` WHERE   `p_id`='$pid' ");  

                              while ($row=mysqli_fetch_array($qry)) 
                              {
                                ?>
                                   <tr>
                                    <td><?php echo $row['0']; ?></td>
                                    
                                    <td><?php echo $row['2']; ?></td>
                                    <td><?php echo $row['3']; ?></td>
                                    <td><?php echo $row['4']; ?></td>
                                    <td><?php echo $row['5']; ?></td>
                                    <td><?php echo $row['6']; ?></td>
                                    
                                    
                                  
                                  

                                  </tr>

                                <?php
                              }

                          ?>

                       
                        
                      </tbody>
                    </table>  

                <?php
                  }else
                  {
                    echo "select the inpatient!";
                  }
                ?>
                
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
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>


  
</body>

</html>
