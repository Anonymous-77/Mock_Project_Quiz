<?php
	session_start();
	require 'connection.php';
    if(isset($_POST['CSubmit'])){
        $userName = $_POST['uname'];
        $password=$_POST['pass'];
            $query="select * from student WHERE username='".$userName."'";
			$query_run = mysqli_query($dbhandle,$query);
			if(mysqli_num_rows($query_run)>0){
				// there is already a user with the same username
				echo '<script type="text/javascript"> alert("User already exists ... try another username")  </script>;
                window.location.href="signUp.html" </script>';
			}
			else{
				$insert_query = "insert into student (username,password) 
				values ('".$userName."','".$password."')";
				$executed = mysqli_query($dbhandle, $insert_query);
				if (!$executed)
					die("unable to insert values");
				else{
					echo '<script type="text/javascript"> alert("Registered Successfully...Please Log In ");
					window.location.href="login.html" </script>';	
				}
			}

        
        


    }
?>