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
      <h3 class="heading-agileinfo" style="margin-top: -20px;">My Profile</h3>
      <div class="col-md-3 about-w3right"></div>
      <div class="col-md-8 about-w3left">
      <?php include('connection.php');
        $sq=mysqli_query($con,"SELECT * FROM user WHERE u_id='$user_id'");
        $row=mysqli_fetch_array($sq);
       ?>
        <div class="panel panel-warning" >
         <form action="" method="post" enctype="multipart/form-data">
          <div class="panel-body">
            <div class="col-md-3" style="margin-left: 40px;">
              <h5 style="color: blue; font-weight: bold; margin-bottom: 20px; font-size: 14px;">First_Name: </h5>
              <h5 style="color: blue; font-weight: bold;margin-bottom:20px; font-size: 14px;">Last_Name: </h5>
              <h5 style="color: blue; font-weight: bold;margin-bottom: 20px; font-size: 14px;">Contact: </h5>
              <h5 style="color: blue; font-weight: bold;margin-bottom: 20px; font-size: 14px;">Address: </h5>
              <h5 style="color: blue; font-weight: bold;margin-bottom: 20px; font-size: 14px;">Email: </h5>
              <h5 style="color: blue; font-weight: bold;margin-bottom: 20px; font-size: 14px;">Image: </h5>
            </div>
            <div class="col-md-5" style="text-transform: capitalize;">
                <input type="text" name="fname" value="<?php echo $row['first_nm'] ?>" class="form-control" >
                <input type="text" name="lname" value="<?php echo $row['last_nm'] ?>" class="form-control" >
                <input type="text" name="contact" value="<?php echo $row['contact'] ?>" class="form-control" >
                <input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control" >
                <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" >
                <input type="file" name="img" class="form-control" >
                <button type="submit" name="save" class="btn btn-info"><i class="fa fa-user"></i>Update</button>
                <a href="profile.php" class="btn btn-danger"><i class="fa fa-mail-reply"></i>Back</a>
            </div>
          </div>
        </form>
        <?php include('connection.php'); 
            if(isset($_POST['save']))
            {
              if(isset($_FILES['img']['name']))
              {
              $file = rand(1000,100000)."-".$_FILES['img']['name'];
                            $file_loc = $_FILES['img']['tmp_name'];
                            $file_size = $_FILES['img']['size'];
                            $file_type = $_FILES['img']['type'];
                            $folder="user/image/";
                            // new file size in KB
                            $new_size = $file_size/2048;  
                            // new file size in KB
                                                        
                           // make file name in lower case
                           $new_file_name = strtolower($file);
                                                        // make file name in lower case
                                 
                            $final_file=str_replace(' ','-',$new_file_name);
                                                        
                         if(move_uploaded_file($file_loc,$folder.$final_file))
                          {// Start of if image file upload successful
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                            $contact=$_POST['contact'];
                            $address=$_POST['address'];
                            $email=$_POST['email'];
                           
                        $qry=mysqli_query($con,"UPDATE `user` SET `first_nm`='$fname',`last_nm`='$lname',`contact`='$contact',`address`='$address',`email`='$email',`image`='$final_file' WHERE u_id='$user_id'");
                        if($qry)
                        {
                          echo '<script>alert("Profile Updated"); window.location="profile.php";</script>';
                        }
                        else
                        {
                          echo '<script>alert("Failed...Try Again"); </script>';
                        }
               }
              }
                $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $contact=$_POST['contact'];
                            $address=$_POST['address'];
                            $email=$_POST['email'];
                           
                        $qry=mysqli_query($con,"UPDATE `user` SET `first_nm`='$fname',`last_nm`='$lname',`contact`='$contact',`address`='$address',`email`='$email' WHERE u_id='$user_id'");
                        if($qry)
                        {
                          echo '<script>alert("Profile Updated"); window.location="profile.php";</script>';
                        }
                        else
                        {
                          echo '<script>alert("Failed...Try Again"); </script>';
                        }
            }
           ?>
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

