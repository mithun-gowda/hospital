<?php include('session.php'); ?>
<?php include('connection.php');
	$pdid=$_GET['pdid'];
	$pr=mysqli_query($con,"SELECT * FROM pres_details where pdid='$pdid'");
	$row=mysqli_fetch_array($pr);
	$pres_id=$row['pres_id'];
	$dept=mysqli_query($con,"DELETE FROM pres_details where pdid='$pdid'");
	if($dept)
	{
    echo "<script>alert('Deleted successfully'); window.location='pres_details.php?pres_id=".$pres_id."'; </script>";
	}
	else
	{
    echo "<script>alert('Unsuccessful'); window.location='pres_details.php?pres_id=".$pres_id."';</script>";
	}
 ?>