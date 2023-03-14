<?php

    include 'session.php';

?>
<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.php">
                              <!-- <img src="images/logo.png" alt="" width="130"> -->
                              <h1>HOSPITECH</h1>
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                 <!--  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@medic.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li>
                  </ul> -->
                  <!-- <div class="link-btn">
                        <a href="#" class="btn-style-one">Appoinment</a>
                  </div> -->
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<?php 

      if ($_SESSION['user_type']=="inpatient")
      {
      ?>
                        <nav class="navbar navbar-default">
                              <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                          </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                          <ul class="nav navbar-nav">
                                                <li class="active">
                                                      <a href="index.php">Home</a>
                                                </li>
                                                <!-- <li>
                                                      <a href="about.html">About</a>
                                                </li> -->
                                                <!-- <li>
                                                      <a href="service.html">Service</a>
                                                </li> -->
                                                
                                                <!-- <li>
                                                      <a href="viewdoctor.php">Doctor</a>
                                                </li> -->
                                                <!-- <li>
                                                      <a href="my_appointments.php">My Appointments</a>
                                                </li> -->
                                                <li>
                                                      <a href="myreport.php">My Report</a>
                                                </li>
                                                
                                               <!--  <li>
                                                      <a href="contact.html">Contact</a>
                                                </li> -->
                                                
                                                <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient
                                                            <span class="caret"></span>
                                                      </a>
                                                      <ul class="dropdown-menu">
                                                            <?php  
                                                                  if (isset($_SESSION['user_id'])) 
                                                                  {
                                                            ?>
                                                                         <li>
                                                                              <a href="logout.php">Logout</a>
                                                                        </li>
                                                                        <li role="separator" class="divider"></li>
                                                                        <li>
                                                                              <a href="profile2.php">Profile</a>
                                                                        </li> 
                                                            <?php
                                                                  }
                                                                  else
                                                                  {
                                                            ?>
                                                                   <li>
                                                                        <a href="registration.php">Registeration</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="signin.php">Login</a>
                                                                  </li>

                                                            <?php
                                                                  }

                                                            ?>
                                                           
                                                            
                                                            
                                                      </ul>
                                                </li>
                                          </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                              </div>
                              <!-- /.container-fluid -->
                        </nav>



      <?php
      }
      else if ($_SESSION['user_type']=="outpatient") 
      {
      ?>

                        <nav class="navbar navbar-default">
                              <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                          </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                          <ul class="nav navbar-nav">
                                                <li class="active">
                                                      <a href="index.php">Home</a>
                                                </li>
                                                <!-- <li>
                                                      <a href="about.html">About</a>
                                                </li> -->
                                                <!-- <li>
                                                      <a href="service.html">Service</a>
                                                </li> -->
                                                
                                                <li>
                                                      <a href="viewdoctor.php">Doctor</a>
                                                </li>
                                                <li>
                                                      <a href="my_appointments.php">My Appointments</a>
                                                </li>
                                                <li>
                                                      <a href="prescriptions.php">My Prescriptions</a>
                                                </li>
                                                
                                               <!--  <li>
                                                      <a href="contact.html">Contact</a>
                                                </li> -->
                                                
                                                <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient
                                                            <span class="caret"></span>
                                                      </a>
                                                      <ul class="dropdown-menu">
                                                            <?php  
                                                                  if (isset($_SESSION['user_id'])) 
                                                                  {
                                                            ?>
                                                                         <li>
                                                                              <a href="logout.php">Logout</a>
                                                                        </li>
                                                                        <li role="separator" class="divider"></li>
                                                                        <li>
                                                                              <a href="profile.php">Profile</a>
                                                                        </li> 
                                                            <?php
                                                                  }
                                                                  else
                                                                  {
                                                            ?>
                                                                   <li>
                                                                        <a href="registration.php">Registeration</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="signin.php">Login</a>
                                                                  </li>

                                                            <?php
                                                                  }

                                                            ?>
                                                           
                                                            
                                                            
                                                      </ul>
                                                </li>
                                          </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                              </div>
                              <!-- /.container-fluid -->
                        </nav>     
      <?php
      }
      


?>


