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
        <li class="active">view patients</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Out Patients Details</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading">Out Patient detail</div>
          <div class="panel-body">
            <div class="col-md-12">
              <table class="table table-hover" id="myTable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Patient_name</th>
                          <th>Contact No</th>
                          
                          <th>Address</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Reg date</th> 
                          
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `user`");  
                            
                              while ($row=mysqli_fetch_array($qry)) 
                              {
                                ?>
                                   <tr>
                                    <td><?php echo $row['u_id']; ?></td>
                                    <td><?php echo $row['1']; ?> <?php echo $row['2']; ?></td>
                                    
                                    <td><?php echo $row['3']; ?></td>
                                    <td><?php echo $row['4']; ?></td>
                                    
                                    <td><?php echo $row['5']; ?></td>
                                   <td><?php echo $row['gender']; ?></td>
                                    
                                    
                                    <td><?php echo $row['reg_date']; ?></td>
                                    

                                    

                                  </tr>

                                <?php
                              }

                          ?>

                       
                        
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

  <script type="text/javascript" src="DataTables/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>
  
</body>

</html>
