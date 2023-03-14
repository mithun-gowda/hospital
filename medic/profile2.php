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
            <h1>My Profile</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>My Profile</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
      <center><h3 class="heading-agileinfo" style="padding-bottom: 40px;">My Profile</h3></center>
      
      <?php include('connection.php');
        $sq=mysqli_query($con,"SELECT * FROM inpatients WHERE p_id='$user_id'");
        $row=mysqli_fetch_array($sq);
       ?>
        <div class="panel panel-warning" style="">
          <div class="panel-body">
            <!-- <center><img src="user/image/<?php echo $row['image']; ?>" height="150" width="150" class="img-circle"></center> -->
            <hr>
            <div class="col-md-2" style="margin-left: 40px;">
              <h5 style="">Name: </h5><br>
              <h5 style="">Contact: </h5><br>
              <h5 style=>Address: </h5><br>
              <h5 >Email: </h5><br>
              <!-- <a href="edit_profile.php" class="btn btn-success"><i class="fa fa-user"></i>Edit</a> -->
            </div>
            <div class="col-md-3" style="text-transform: capitalize;">
                <h6 style="color: red; font-weight: bold; font-size: 14px;"><?php echo $row['p_name']; ?></h6><br>
                <h6 style="color: red; font-weight: bold; font-size: 14px;"><?php echo $row['phone']; ?></h6><br>
                <h6 style="color: red; font-weight: bold; font-size: 14px;"><?php echo $row['address']; ?></h6><br>
                <h6 style="color: red; font-weight: bold; font-size: 14px;"><?php echo $row['email']; ?></h6><br>
                <a href="index.php" class="btn btn-info"><i class="fa fa-mail-reply"></i>Back</a>
            </div>
          </div>
        </div>
      <div class="clearfix"> </div>
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

