<?php 
	include('connection.php');
	$apid=$_GET['apid'];

	$sql=mysqli_query($con,"UPDATE appointment SET status='confirmed' where ap_id='$apid'");
	if($sql)
	{
		echo '<script>alert("Confirmed"); history.back(); </script>';
	} 
	else
		{
		echo '<script>alert("Failed"); history.back(); </script>';
	} 

?>