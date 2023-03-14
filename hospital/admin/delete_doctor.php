<?php
 		$did=$_POST['did'];
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `staff` WHERE `s_id`='$did'");  
            if ($qry) 
		      {
		        echo "<script>alert('staff removed.');window.location='delete.php';</script>";
		      }

?>