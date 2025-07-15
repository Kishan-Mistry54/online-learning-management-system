<?php
	//session_start();
	if($_SESSION['admin'])
	{
		$admin = $_SESSION['admin'];
	}
	else
	{
		header("location:login.php");
	}
?>