<?php include('session.php'); ?>
<?php include('connection.php');
	$pid=$_GET['pres_id'];
	$dept=mysqli_query($con,"delete from prescription where pres_id='$pid'");
	if($dept)
	{
    echo "<script>alert('Deleted successfully'); window.location='prescription.php'; </script>";
	}
	else
	{
    echo "<script>alert('Unsuccessful');window.location='prescription.php';</script>";
	}
 ?>