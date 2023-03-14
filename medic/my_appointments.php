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

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
      <div class="container-fluid">
      <center><h3 class="heading-agileinfo">My appointments</h3></center>
      <hr>
      
      <div class="col-md-2 about-w3right">
        </div>
    <div class="col-md-8 about-w3left">
      <table class="table table-bordered" id="example">
        <thead>
          <tr>
              <th>SL NO</th>
              <th>Doctor</th>
              
              <th>Reason</th>
              <th>Bookedfor</th>
              <th>Bookedon</th>
              <th>status</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'connection.php'; $i=1;
            $sq=mysqli_query( $con,"SELECT * FROM appointment,staff where staff.s_id=appointment.did and user_id='$user_id' and status!='prescribed' order by bookingfor desc");
             while($row=mysqli_fetch_array($sq)){
           ?>
           <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['s_name']; ?></td>
            
            <td><?php echo $row['purpose']; ?></td>
            <td><?php echo $row['bookingfor'].' '.$row['booktime']; ?></td>
            <td><?php echo $row['bookedon']; ?></td>
             <td><?php $st=$row['status']; 
               if($st=='booked')
               {
                ?>
                <span style="color: orange; font-weight: bold;">Booked</span>
                <a href="cancellapp.php?ap_id=<?php echo $row['ap_id']; ?>" class="btn btn-danger" title="Cancell appointment" onclick="return confirm('Are you sure to delete it?'); ">cancel</a>
              <?php   
               }if($st=='confirmed')
               {
                ?>
                <span style="color: blue; font-weight: bold;">Confirmed</span>
                <a href="cancellapp.php?ap_id=<?php echo $row['ap_id']; ?>" class="btn btn-danger" title="Cancell appointment" onclick="return confirm('Are you sure to delete it?'); "><i class="fa fa-close"></i></a>
              <?php   
               }if($st=='cancelled')
               {
                ?>
                <span style="color: red; font-weight: bold;">Cancelled</span>
              <?php   
               }
               ?>
             </td>
             
           </tr>
           <?php } ?> 
        </tbody>
      </table>  
    </div>
  </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->

<!--====  End of Google Map  ====-->

<!--footer-main-->
<?php  include 'footer.php'; ?>
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
</body>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 06:33:59 GMT -->
</html>

