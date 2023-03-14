<?php include('session.php'); ?>
<?php include('connection.php');
	$pid=$_GET['lid'];
	$dept=mysqli_query($con,"DELETE FROM `leave` WHERE lid=".$pid) or die(mysqli_error($con));
	if($dept)
	{
    echo "<script>alert('Deleted successfully'); window.location='my_leaves.php'; </script>";
	}
	else
	{
    echo "<script>alert('Unsuccessful');window.location='my_leaves.php';</script>";
	}
 ?>