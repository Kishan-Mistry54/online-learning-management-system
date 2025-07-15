<?php
	session_start();
	if($_SESSION['admin'])
	{
		$admin = $_SESSION['admin'];
		$sel = "select * from admin where aid = '$admin'";
		$r1 = mysqli_query($conn,$sel);
		$row = mysqli_fetch_assoc($r1);
		$code = $row['username'];
	}
	else
	{
		header("location:../login.php");
	}
?>