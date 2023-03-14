<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 06:33:59 GMT -->
<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon">
  <link rel="icon" href="images/favicon.html" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<?php 
  include 'menu.php';


?>

<?php  include('connection.php');
  $did=$_GET['did'];
  $sqr=mysqli_query($con,"SELECT * FROM staff where s_id='$did'");
  $rws=mysqli_fetch_array($sqr);
 ?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Doctor Appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Doctor Appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->


<section class="team-section section">
    <div class="container">
          <div class="row">
          <?php include('connection.php'); 
                $query=mysqli_query($con,"SELECT * FROM schedule where d_id='$did'") or die(mysql_error());
                $num_rows=mysqli_num_rows($query);
                if($num_rows>0)
                { ?>
          <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th colspan="2"><?php echo $rws['s_name']; ?></th>
                    </tr>
                    <tr>
                      <th>SL NO</th>
                      <th>Start time-To time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; while($row=mysqli_fetch_array($query)){ ?>
                      <tr>
                    <td><?php echo $i++; ?></td>
                     <td><?php echo $row['stime'].'-'.$row['etime']; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
           </div>
           <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <form action="" method="post">
                <table class="table table-bordered">
                  <tr>
                    <th colspan="2" style="text-align: center; color: orange; font-size: 20px;">Book Appointment</th>
                  </tr>
                  <tr>
                    <th>Select Date</th>
                    <td><input type="date" onblur="showBooking(this.value,<?php echo $did; ?>)" name="adate" class="" required=""></td>
                  </tr>
                  <tr>
                    <th>Free Slots</th>
                    <td><div id="free_slots"></div></td>
                  </tr>
                  <tr>
                    <th>Purpose</th>
                    <td><input type="text" name="purpose" class="form-control" placeholder="Purpose of appointment" required=""></td>
                  </tr>
                  <tr>
                    <th>Booking Done on</th>
                    <td><input type="date" name="bdate" class=""  value="<?php echo date('Y-m-d'); ?>" readonly></td>
                  </tr>
                  <tr>
                    <th colspan="2" style="text-align: center"><input type="submit" name="save" value="Book" class="btn btn-success"></th>
                  </tr>
                </table>
              </form>
              </div>
           </div>
          <?php  } else{ ?>
            <span style="color:red; margin-left: 300px; font-weight: bold; font-size: 30px;">This doctor haven't set any schedules yet</span>
          <?php } ?>
              
          </div>
              </div>
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->

<!--====  End of Google Map  ====-->

<!--footer-main-->
<?php include 'footer.php'; ?>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
  
<script>
  function showBooking(str,did) 
    {
      
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("free_slots").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","getfreeslots.php?date="+str+"&did="+did,true);
      xmlhttp.send();
    }
</script>

</body>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 06:33:59 GMT -->
</html>



<?php include('connection.php'); 
   if(isset($_POST['save']))
     {
              
          $bdate=$_POST['bdate'];
          $adate=$_POST['adate'];
          $purpose=$_POST['purpose'];
          $atime=$_POST['apptime'];
                           
          
         $qry=mysqli_query($con,"INSERT INTO `appointment`(`ap_id`, `user_id`, `did`, `bookingfor`, `booktime`, `bookedon`,`purpose`, `status`) VALUES ('','$user_id','$did','$adate','$atime','$bdate','$purpose','booked')");
                            
          if($qry)
            {
                echo '<script>alert("Success!.."); window.location="my_appointments.php"; </script>';
            }
            else
              {
                echo '<script>alert("Failed...Try Again"); </script>';
              }
               
  }
?>
