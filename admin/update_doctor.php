<?php
    
    
  if (isset($_POST['btn_save'])) 
  {
      include 'connection.php';

      $id=$_POST['id'];
      $name=$_POST['name'];
      $Phone=$_POST['Phone'];
      $email=$_POST['email'];
      $degree=$_POST['degree'];
      $department=$_POST['department'];
      $gender=$_POST['subject'];
      $type=$_POST['type'];
      
      $uname=$_POST['user_name'];
      $password=$_POST['password'];
      $abt_d=$_POST['form_message'];

      if ($_FILES['img']['name']=="") 
      {
             
          $qry=mysqli_query($con,"UPDATE `staff` SET `s_name`='$name',`phone`='$Phone',`email`='$email',`degree`='$degree',`department`='$department',`gender`='$gender',`staff_type`='$type',`username`='$uname',`password`='$password',`about`='$abt_d' WHERE `s_id`='$id'");

          if ($qry) 
          {
            echo "<script>alert('staff info addded.');window.location='update.php';</script>";
          }
            
      }
      else
      {
          $file = rand(1000,100000)."-".$_FILES['img']['name'];
          $file_loc = $_FILES['img']['tmp_name'];
          $file_size = $_FILES['img']['size'];
          $file_type = $_FILES['img']['type'];
          $folder="uploads/";
          // new file size in KB
          $new_size = $file_size/2048;  
          // new file size in KB
                                      
         // make file name in lower case
         $new_file_name = strtolower($file);
                                      // make file name in lower case
               
          $final_file=str_replace(' ','-',$new_file_name);
                                      
       if(move_uploaded_file($file_loc,$folder.$final_file))
        {// Start of if image file upload successful

          $qry=mysqli_query($con,"UPDATE `staff` SET `s_name`='$name',`phone`='$Phone',`email`='$email',`degree`='$degree',`department`='$department',`gender`='$gender',`staff_type`='$type',`username`='$uname',`password`='$password',`about`='$abt_d',`staff_image`='$final_file$final_file' WHERE `s_id`='$id'");

          if ($qry) 
          {
            echo "<script>alert('staff info addded.');window.location='update.php';</script>";
          }
      }


      }

      
      
  }

?>


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
        <li class="active">Add Staff</li>
      </ol>
    </div><!--/.row-->
    
    
        
    
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3" style="background: #159957;  /* fallback for old browsers */
                                                  background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
                                                  background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                  padding: 20px;
                                                    ">
           <div class="row">
              <div class="col-lg-12">
                <a href="view_doctor.php" class="btn btn-warning btn-block">show Staff</a>
                <h1 class="page-header" style="color:white;"><center>Form to update Staff</center></h1>
              </div>
            </div><!--/.row-->
        
             <?php
                          $id=$_POST['did'];
                              include 'connection.php';
                              $qry=mysqli_query($con,"SELECT * FROM `staff` WHERE `s_id`='$id' ");  

                             $row=mysqli_fetch_array($qry)
                             
                                ?>

                      <form name="contact_form" class="default-form contact-form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" name="id" placeholder="Name" class="form-control" value="<?php echo $row['0']; ?>">
                                    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $row['1']; ?>" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $row['3']; ?>"  required="">
                                </div>

                                 <div class="form-group">
                                    <select name="department" class="form-control" required="">
                                      
                                       <option value="<?php echo $row['5']; ?>"><?php echo $row['5']; ?></option>
                                      <?php
                                          include 'connection.php';
                                          $qry2=mysqli_query($con,"SELECT * FROM `department`");  

                                          while ($row2=mysqli_fetch_array($qry2)) 
                                          {
                                            ?>
                                                 <option value="<?php echo $row2['dept_id']; ?>"><?php echo $row2['dept_name']; ?></option>
                                              

                                            <?php
                                          }

                                      ?>
                                 </select>
                                 </div>

                                  <div class="form-group">
                                     <label>user name</label>
                                    <input type="text" name="user_name" placeholder="username" class="form-control" value="<?php echo $row['8']; ?>" required="">
                                </div>                           
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="Phone" class="form-control" value="<?php echo $row['2']; ?>"  required="">
                                </div>
                                
                                 <div class="form-group" >
                                     <select name="degree" class="form-control" required="">
                                     <option value="<?php echo $row['degree']; ?>"><?php echo $row['degree']; ?></option>
                                        
                                        <option value="mbbs">MBBS</option>
                                        <option value="md">MD</option>
                                        <option value="md">MS</option>
                                        <option value="md">DO</option>
                                        <option value="md">PHD</option>
                                        <option value="md">DDS</option>
                                        <option value="md">BN</option>
                                        <option value="md">DPT</option>
                                    </select>
                                </div> 
                                
                                <div class="form-group" >
                                    <select name="subject" class="form-control" required="">
                                    <option value="<?php echo $row['6']; ?>"><?php echo $row['6']; ?></option>
                                        
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                    <select name="type" class="form-control" required="">
                                    <option value="<?php echo $row['7']; ?>"><?php echo $row['7']; ?></option>
                                        
                                        <option value="Doctor">Doctor</option>
                                        <option value="Nurse">nurse</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                     <label></label>
                                    <input type="file" name="img" placeholder="password" class="form-control"  value="<?php echo $row['11']; ?>" >
                                </div>  

              

                                
                                  <div class="form-group">
                                     <label>password</label>
                                    <input type="password" name="password" placeholder="password" class="form-control" value="<?php echo $row['9']; ?>" required="">
                                </div>                       
                            </div>
                            </div>    
                                
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" placeholder="about staff" class="form-control" required="" value=""><?php echo $row['10']; ?> </textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btn_save" class="btn btn-warning">Update Doctor details</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
          </div>
                   
                    
      
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






                               
                                
                                
                               

                                        
                                       
                                        
                                
                                
                                
                            
                               

                                
                                
                                
                                  
                                
                            
                               