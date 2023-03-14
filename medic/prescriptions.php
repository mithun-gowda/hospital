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
            <h1>My Prescriptions</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>My Prescriptions</li>
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
    <div class="container-fluid">
      <center><h3 class="heading-agileinfo">Prescriptions</h3></center>
      
      <div class="col-md-1 about-w3right">
        </div>
    <div class="col-md-10 about-w3left">
      <table class="table table-bordered" id="example">
        <thead>
          <tr>
              <th>Delete Action</th>
              <th>SL NO</th>
              <th>Patient</th>
              <th>contact</th>
              <th>Date</th>
              <th>Prescribed medicine</th>
              <th>Purpose</th>
               <th>Consume</th>
              <th>Days</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'connection.php'; $i=1;
             $sq=mysqli_query($con,"SELECT * FROM prescription,user where prescription.user_id=user.u_id AND prescription.user_id='$user_id' order by pdate desc");
             while($row=mysqli_fetch_array($sq)){
              $pres_id=$row['pres_id'];
              $sqr=mysqli_query($con,"SELECT * from pres_details where pres_id='$pres_id'");
              $rows=mysqli_num_rows($sqr);
              if($rows >=1)
              {
           ?>
           <tr>
              <td rowspan="<?php echo $rows; ?>"><a href="delpres.php?pres_id=<?php echo $pres_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure delete the prescription'); "><i class="fa fa-trash-o"></i></a></td>
            <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $i++; ?></td>
            <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $row['first_nm'].' '.$row['last_nm']; ?></td>
            <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo $row['contact']; ?></td>
            <td rowspan="<?php echo $rows; ?>" style="color:red; "><?php echo date('d-m-Y',strtotime($row['pdate'])); ?></td>
            <?php while($fetch=mysqli_fetch_array($sqr)) {?>
            <td><?php echo $fetch['med_name']; ?></td>
             <td><?php echo $fetch['disease']; ?></td>
             <td><?php echo $fetch['consume_for']; ?></td>
             <td><?php echo $fetch['days']; ?></td>
             
           </tr>
           <?php } } }?>
        </tbody>
      </table>  
    </div>
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

