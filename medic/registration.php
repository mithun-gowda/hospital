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
  // include 'menu.php';


?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Registration Form</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Registration Form</li>
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
      <center><h3 >User Registration</h3></center>
          <div class="col-md-2 about-w3right">
            
          </div>
          <div class="col-md-8 about-w3left">
            <div class="panel panel-warning">
              
              <div class="panel-body">
              <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="form-group col-md-6">
                  <label>First Name</label>
                  <input type="text" name="fname"  pattern="[A-Za-z]+" title="letters only" required class="form-control" placeholder="Firstname..." required="">
                  </div>
                   <div class="form-group col-md-6">
                  <label>Last Name</label>
                  <input type="text" name="lname"  pattern="[A-Za-z]+" title="letters only" required class="form-control" placeholder="Lastname..." required="">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6">
                  <label>Contact</label>
                  <input type="text" name="contact" pattern="^\d{10}$" title="10 numeric characters only" required class="form-control" placeholder="Contact..." required="">
                  </div>
                   <div class="form-group col-md-6">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Address..." required="">
                  </div>
               </div> 
               <div class="row">
                  <div class="form-group col-md-6">
                  <label>Gender</label>
                  <input type="radio" name="gender" value="male" checked="">Male
                  <input type="radio" name="gender" value="female">Female
                  </div>
                   <div class="form-group col-md-6">
                  <label>Image</label>
                  <input type="file" name="img" class="form-control" required="">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"class="form-control" placeholder="Email..." required="">
                  </div>
                   <div class="form-group col-md-6">
                  <label>Password</label>
                  <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control" placeholder="Password..." required="">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6">
                  <label>Confirm Password</label>
                  <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password..." required="">
                  </div>
                   <div class="form-group col-md-6">
                  <label>Security Question</label>
                  <select name="question" class="form-control">
                    <option>Select Question</option>
                    <option>what is your favourite  color?</option>
                                    <option value="what is your favourite  animal?">what is your favourite  animal?</option>
                                    <option  value="what is your favourite  flower?">what is your favourite  flower?</option>
                                    <option value="what is your birth date?">what is your birth date?</option>
                  </select>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6">
                  <label>Answer</label>
                  <input type="text" name="answer" class="form-control" placeholder="Answer the question..." required="">
                  </div>
                   <div class="form-group col-md-6">
                    <br>
                  <input type="submit" style="margin-bottom: 40px; margin-left: -5px;" name="reg" class="btn btn-info" value="SignUp">
                  </div>
               </div>
                
               </form>
               <center> <a href="signin.php">Already Have a Account ? signin </a></center>
               <?php include('connection.php'); 
                if(isset($_POST['reg']))
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
                               ECHO $email=$_POST['email'];
                                $gender=$_POST['gender'];
                                $security=$_POST['question'];
                                $reply=$_POST['answer'];
                                $password=$_POST['password'];
                                $confirmpassword=$_POST['cpassword'];
                                $srR=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='".$email."'");
                                $nums=mysqli_num_rows($srR);
                                if($nums > 0)
                                {
                                  echo '<script>alert("Already an user exist with same name and email"); </script>';
                                }
                                else
                                {
                                    if($password==$confirmpassword)
                                    {
                            $qry=mysqli_query($con,"INSERT INTO `user`(`first_nm`, `last_nm`, `contact`, `address`, `email`, `gender`, `security`, `answer`, `password`, `reg_date`, `image`) VALUES ('".$fname."','".$lname."','".$contact."','".$address."','".$email."','".$gender."','".$security."','".$reply."','".$password."',now(),'".$final_file."')") OR die(mysqli_error($con));
                          
                            if($qry)
                            {
                              echo '<script>alert("Success!..Please signin"); window.location="signin.php";</script>';
                            }
                            else
                            {
                              echo '<script>alert("Failed...Try Again---'.$qry.'"); history.back(); </script>';
                            }
                         }
                         else
                         {
                          echo '<script>alert("Password Mismatch"); history.back(); </script>';
                         }
                   
                    }
                  }
                }
               ?>
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
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>Support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.html">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
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

<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $name=$_POST['name'];
      $Phone=$_POST['Phone'];
      $Age=$_POST['age'];
      $Address=$_POST['add'];
      $email=$_POST['email'];
      $gender=$_POST['subject'];
      $Doctor=$_POST['doctor'];
      $uname=$_POST['user_name'];
      $password=$_POST['password'];

      $qry=mysqli_query($con,"INSERT INTO `patients`(`id`, `name`, `phone`,`age`,`address`, `email`, `gender`, `doctor`, `username`, `password`) VALUES ('','$name','$Phone','$Age','$Address','$email','$gender','$doctor','$uname','$password')");

      if ($qry) 
      {
        echo "<script>alert('Patient Registered.')</script>";
      }


      
  }

?>