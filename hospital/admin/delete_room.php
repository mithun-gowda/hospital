<?php
 		$did=$_POST['did'];
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `rooms` WHERE `r_id`='$did'");  
            if ($qry) 
		      {
		        echo "<script>alert('room removed.');window.location='delete.php';</script>";
		      }

?>