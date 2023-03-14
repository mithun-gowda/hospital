<?php
 session_start();
 if (!isset($_SESSION['user_id'])) 
 {
 	header('Location:signin.php');
 }
else
{
	$user_id=$_SESSION['user_id'];
}
?>