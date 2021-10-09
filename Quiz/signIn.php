<?php
	session_start();
	require 'connection.php';
	if(isset($_POST["lsubmit"])){
        $name=$_POST["name"];
        $pass=$_POST["password"];
		$shapass = 
        $query="select * from student WHERE username='$name' AND password='$pass'";
		$query_run = mysqli_query($dbhandle,$query);	 
		if(mysqli_num_rows($query_run)>0){
			$row=mysqli_fetch_assoc($query_run);
			$_SESSION['uid']=$row['id'];
			$_SESSION['username']=$name;
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		
		else{
			echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';	
			echo "<script type='text/javascript'>window.location.href='login.php'</script>";
		}		

    }

?>