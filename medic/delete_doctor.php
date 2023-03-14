
<?php
 		$did=$_GET['did'];
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `doctor` WHERE `id`='$did'");  
            if ($qry) 
		      {
		        echo "<script>alert('doctor removed.');window.location='viewdoctor.php';</script>";
		      }

?>