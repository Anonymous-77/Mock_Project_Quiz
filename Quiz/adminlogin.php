<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Form </title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action="" method="POST">
      <div class="field email">
        <div class="input-area">
          <input requried name="email" type="text" placeholder="Email Address">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input required name="password" type="password" placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <!--<div class="field">
        <div class="input-area">
        <label for="selector"> <!-- Can add label if want 
          <p>Select an option to continue:</p>
          <select id="selector" style="width:100%;height:30px;border-radius:5px;border: 1px solid #bfbfbf;border-bottom-width: 2px;";> <!-- Use "select" to create object 
            <option selected style="color:#bfbfbf;">none </option>
            <option>Admin</option>  <!--Add all applicable options 
            <option>User</option>
          </select>
        </label>
      </div>-->
     
      <input name="adminsubmit" type="submit" value="Login">
    </form>
  </div>

 <!-- <script src="script.js"></script>-->

  <?php
    
    include('connection.php');

    if(isset($_POST['adminsubmit'])){
      $name = $_POST['email'];
      $pass = $_POST['password'];

      $query = "SELECT * FROM `admin` WHERE email = '$name' AND password = '$pass'";
      $query_run = mysqli_query($dbhandle, $query);
      $row = mysqli_fetch_array($query_run);
      if($row)
      {
        session_start();
        $_SESSION['email'] = $row['email'];
        echo "<script type='text/javascript'>window.location.href='adminhome.php'</script>";
      }
      
      else{
        echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';  
        echo "<script type='text/javascript'>window.location.href='login.php'</script>";
      }   
      }
  ?>


 

</body>
</html>
