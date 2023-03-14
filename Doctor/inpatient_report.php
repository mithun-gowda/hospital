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
                <a href="view_reports.php" class="btn btn-warning btn-block">view reports</a>
                <h1 class="page-header" style="color:white;"><center>In Patient Report</center></h1>
              </div>
            </div><!--/.row-->
    
    
    


    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class=" panel-default" style="color:white;">

          <div class="panel-body">
            <div class="col-md-12">
              <form role="form" method="post" action="">
                <div class="form-group">
                  
                   <label>Inpatient</label>
                                    <?php
                                        echo "";

                                    ?>
                                    <select name="pid" class="form-control">
                                        <option value="">Select inpatient</option>
                                        <?php
                                        echo  $user_id;
                                          include 'connection.php';
                                          $qry=mysqli_query($con,"SELECT * FROM `inpatients` WHERE status='in' AND  `doctor`='$user_id'");  

                                          while ($row=mysqli_fetch_array($qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['0']; ?>"><?php echo $row['1']; ?></option>
                                               

                                            <?php
                                          }
                                        ?>
                                    </select>
                </div>

                    <div class="form-group">
                    <label>test name</label>
                   
                                        
                          <input type="text"  name="test_name" placeholder="Test Name" class="form-control" value="" > 
                    </div>

                      <div class="form-group">
                          <label>technology used</label>
                          
                            <input type="text" name="technology" placeholder="Technoloy used" class="form-control" > 
                      </div>

                      <div class="form-group">
                          <label>Amount</label>
                          
                            <input type="text" name="amount" placeholder="Amont" class="form-control" > 
                      </div>
                      <div class="form-group">
                          <label>Result</label>
                          
                            <textarea name="result" placeholder="Result" class="form-control" ></textarea>
                      </div>



                   <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn btn-lg btn-success btn-block">save And Send</button>
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
  
</body>

<!-- Mirrored from medialoot.com/preview/lumino/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 06:38:25 GMT -->
</html>
  


<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $pid=$_POST['pid'];
      $test_name=$_POST['test_name'];
      $technology=$_POST['technology'];
      $amount=$_POST['amount'];
      $result=$_POST['result'];
      $date=date('Y-m-d');

     $qry=mysqli_query($con,"INSERT INTO `test_report`(`rep_id`, `p_id`, `tset_name`, `technology`, `amount`, `result`, `date`) VALUES ('','$pid','$test_name','$technology','$amount','$result','$date')");
      if ($qry) 
      {
        echo "<script>alert('Test report success .');window.location='view_reports.php';</script>";
      }


      
  }

?>