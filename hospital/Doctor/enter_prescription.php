<?php 
  include 'session.php';
  include 'connection.php';
  if(isset($_POST['savepres']))
  {
    $apid=$_GET['apid'];
    $uid=$_GET['uid'];
    $sqr=mysqli_query($con,"INSERT INTO `prescription`(`pres_id`, `did`, `user_id`, `ap_id`, `pdate`) VALUES ('','$user_id','$uid','$apid',now())");
    if($sqr)
    {
      $pres_id=mysqli_insert_id($con);
      echo '<script>alert("Enter prescription details"); window.location="pres_details.php?pres_id='.$pres_id.'"; </script>';
    }
    else
    {
      echo '<script>alert("Failed"); window.location="all_app.php"; </script>';
    }
  }

?>