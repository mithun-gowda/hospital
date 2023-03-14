<?php 
	include('connection.php');
	$apid=$_GET['ap_id'];

	$sql=mysqli_query($con,"UPDATE appointment SET status='cancelled' where ap_id='$apid'");
	if($sql)
	{
		echo '<script>alert("Cancelled"); history.back(); </script>';
	} 
	else
		{
		echo '<script>alert("Failed"); history.back(); </script>';
	} 

?>