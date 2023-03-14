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
    <div class="container">
        <div class="title-text">
            <h1>View Doctor</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Doctor Details</li>
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
        <div class="section-title text-center">
            <h3>Our Expert
                Doctors
            </h3>
            
        </div>


        <div class="row">
          <?php
            include 'connection.php';
            $qry=mysqli_query($con,"SELECT * FROM staff INNER JOIN department on staff.department=department.dept_id WHERE  `staff_type`= 'Doctor' ");  

            while ($row=mysqli_fetch_array($qry)) 
            {
              ?>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="team-member">
                          <img src="../admin/uploads/<?php echo $row['staff_image']; ?>" alt="doctor" class="img-responsive">
                          <div class="contents text-center">
                              <h4><?php echo $row['1']; ?></h4>
                              <p>Phone: <?php echo $row['2']; ?></p>
                              <p>Email: <?php echo $row['3']; ?></p>
                              <p>Department: <?php echo $row['dept_name']; ?></p>
                                <p>Degree: <?php echo $row['degree']; ?></p>
                                 
                              <p>Id: <?php echo $row['5']; ?></p>
                              <p>About: <?php echo $row['about']; ?></p>
                              <a href="doctor_profile.php?did=<?php echo $row['0']; ?>" class="btn btn-info" title="Booking of appointment">Book Appointment</a> 
                          </div>
                      </div>
                  </div>

             <?php
                }
            ?>

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
</body>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 06:33:59 GMT -->
</html>

