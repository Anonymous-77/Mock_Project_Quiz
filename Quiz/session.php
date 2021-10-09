<?php
	ob_start();
	session_start();
	//$a_name = $_SESSION['a_name'];
	if(isset($_SESSION['username']))
	{
		$a_email = $_SESSION['username'];
		include("connection.php");
		$sql = mysqli_query($dbhandle, "SELECT * FROM `student` WHERE username = '$a_email'") or die(mysqli_error($dbhandle));
		$user_id = mysqli_fetch_array($sql);

		$user_name = $user_id['username'];

	}
	if(!($a_email))
	{
		header("location:login.php?login_first");
	}

	if(isset($_SESSION['email']))
	{
		$a_email = $_SESSION['email'];
		include("connection.php");
		$sql = mysqli_query($dbhandle, "SELECT * FROM `admin` WHERE email = '$a_email'") or die(mysqli_error($dbhandle));
		$user_id = mysqli_fetch_array($sql);

		$user_name = $user_id['email'];

	}
	if(!($a_email))
	{
		header("location:login.php?login_first");
	}
	

	return ob_get_clean();
?>