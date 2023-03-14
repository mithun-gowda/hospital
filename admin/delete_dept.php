<?php
 $id=$_GET['did'];
 		 		
 		include 'connection.php';
           $qry=mysqli_query($con,"DELETE FROM `department` WHERE `dept_id`='$id'");  
            if ($qry) 
		      {
		         echo "<script>alert('Department removed.');window.location='add_dept.php';</script>";
		      }

?>