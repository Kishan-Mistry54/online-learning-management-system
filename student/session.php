<?php
	session_start();
	if($_SESSION['student'])
	{
		$user = $_SESSION['student'];
		//$user1 = $_SESSION['stid'];
		
		$coms = "select * from student_reg where email = '$user'";
		$comr = mysqli_query($conn,$coms);
		$comw = mysqli_fetch_array($comr);
		$com_code = $comw['student_code'];
		$stu_fname = $comw['fname'];
		$stu_lname = $comw['lname'];
		$stu_stid = $comw['stid'];
		$stu_cou = $comw['course_id'];
		
	}
	else
	{
		header("location:../login.php");
	}
?>

