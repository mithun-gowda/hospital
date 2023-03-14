<?php
	session_start();
	if (!isset($_SESSION['user_type'])) 
	{
		header('Location:admin_login.php');
	}
	else
	{
		$user_type=$_SESSION['user_type'];
		$user_id=$_SESSION['user_id'];
	}


?>
