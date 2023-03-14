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
        <li class="active">view patients</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Patient Discharge</h1>
      </div>
    </div><!--/.row-->
        
    






    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading"> Inpatient Bill 
            </div>
          <div class="panel-body">


            <div class="col-md-12" >
              
                <?php

                  if (isset($_POST['search'])) 
                  {
                      include 'connection.php';
                    $days=0;
                    $room_charge=0;

                    $reports=0;
                    $reports_charge_total = 0;
                    $amount_to_pay=0;

                    $pid=$_POST['pid'];

                        $qry1=mysqli_query($con,"SELECT * FROM `inpatients` WHERE   `p_id`='$pid' "); 
                        $row1=mysqli_fetch_array($qry1); 

                        $r_id=$row1['room'];

                        $qry4=mysqli_query($con,"UPDATE `inpatients` SET `status`='out' WHERE `p_id`='$pid'"); 



                           $qry5=mysqli_query($con,"UPDATE `rooms` SET `availability`= 'available' WHERE `r_id`='$r_id'"); 
                           
                    ?>

                      <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Bill Generated .
                      </div>

                    <?php



                    

                    $room=$row1['room'];
                    $advance=$row1['advance_payment'];
                    $qry2=mysqli_query($con,"SELECT * FROM `rooms` WHERE    `r_id`='$room' "); 
                    $row2=mysqli_fetch_array($qry2); 


                ?>
                    <div class="row" id="printableArea">
                      <div class="col-md-6">
                        <center>
                          <h2>HOSPITECH</h2>
                          _______________________________________________________________________________________
                          <u><b><h4>patient details</h4></b></u>
                          <table>
                            <tr>
                              <td>patient name </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $row1['p_name']; ?> - <?php echo $row1['age']; ?></td>
                            </tr>
                            <tr>
                              <td>patient address </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $row1['p_name']; ?></td>
                            </tr>
                            <tr>
                              <td>phone   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $row1['phone']; ?></td>
                            </tr>
                             <tr>
                              <td>address   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $row1['address']; ?></td>
                            </tr>
                             <tr>
                              <td>room No  </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $row2['room_no']; ?></td>
                            </tr>
                             
                      </table>
                       
                        
                          _________________________________________________
                          <u><h4>Room  charges details</h4></u>
                          <table>
                           
                            <tr>
                              <td>Room Per day charge   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $room_charge= $row2['unit_price']; ?></td>
                            </tr>
                            <tr>
                              <td>Number of days </td>
                              <td>&nbsp;&nbsp;&nbsp;

                                  <?php
                                    $curr_date=date('Y-m-d');
                                     $admt_date= DateTime::createFromFormat("Y-m-d H:i:s", $row1['admt_date'])->format("Y-m-d");
                                    $date1 = $admt_date;
                                    $date2 = $curr_date;
                                    function dateDiff($date1, $date2) 
                                    {
                                      $date1_ts = strtotime($date1);
                                      $date2_ts = strtotime($date2);
                                      $diff = $date2_ts - $date1_ts;
                                      return round($diff / 86400);
                                    }
                                    echo $days= dateDiff($date1, $date2);
                                  ?>
                              </td>
                            </tr>
                            <tr>
                              <td>Room Charge   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $total_room_charge= $days* $room_charge; ?></td>
                            </tr>
                          </table>
                          
                     

                    _________________________________________________<br>
                          <u><h4>Test/Report Charges</h4></u>
                          <table>
                           
                            <?php
                               $qry3=mysqli_query($con,"SELECT * FROM `test_report` WHERE   `p_id`='$pid' ");  

                                while ($row3=mysqli_fetch_array($qry3)) 
                                { 
                                    $reports=$reports+1;
                                    $reports_charge_total += $row3['amount'];

                                ?>
                                     <!-- <tr>
                                      <td> test Name </td>
                                      <td>&nbsp;&nbsp;&nbsp;<?php echo $row3['test_name']; ?></td>
                                    </tr>
                                    <tr>
                                      <td> test Amount </td>
                                      <td>&nbsp;&nbsp;&nbsp;<?php echo $row3['amount']; ?></td>
                                    </tr> -->

                                <?php
                                }

                            ?>
                            <tr>
                              <td>Total Reports   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $reports; ?></td>
                            </tr>
                            <tr>
                              <td>Test Reports Amount   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $reports_charge_total; ?></td>
                            </tr>
                            

                          </table>
                            
                          _________________________________________________<br>
                          <u><h4>Total Amount Charged </h4></u>
                          <table>
                           
                            <tr>
                              <td>Total Amount   </td>
                              <td>&nbsp;&nbsp;&nbsp;<b><?php echo $reports_charge_total+$total_room_charge; ?></b></td>
                            </tr>
                            <tr>
                              <td>Advance Paid Amount   </td>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $advance; ?></td>
                            </tr>
                            

                          </table>
                           _________________________________________________<br>
                          <h3>
                            Total Bill Amount   
                              &nbsp;&nbsp;&nbsp;<?php echo $reports_charge_total+$total_room_charge; ?>
                          </h3>

                            

                          
                            <hr>
                            <center>********Thank You**********</center>
                            </center>
                      </div>
                    </div>
                    </div>
                    </div>
                     

                    <div class="container">
                      <div class="col-md-12">
                        <input type="button" onclick="printDiv('printableArea')" value="Print this bill"  class="btn btn-warning" />
                      </div>
                    </div>

                    

                <?php
                  }else
                  {
                    echo "select the inpatient!";
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
  <script type="text/javascript">
    function printDiv(divName) 
    {
       var printContents = document.getElementById(divName).innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print();

       document.body.innerHTML = originalContents;
    }
  </script>
</body>

</html>
