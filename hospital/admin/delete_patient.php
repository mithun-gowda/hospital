<?php
 		$did=$_POST['did'];
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `inpatients` WHERE `p_id`='$did'");  
            if ($qry) 
		      {
		        echo "<script>alert('Patient removed.');window.location='delete.php';</script>";
		      }

?>