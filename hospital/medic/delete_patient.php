
<?php
 		$did=$_GET['did'];
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `registration_form` WHERE `id`='$did'");  
            if ($qry) 
		      {
		        echo "<script>alert('Patient removed.');window.location='viewpatient.php';</script>";
		      }

?>