<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quibble-Admin-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminhome.html">QUIBBLE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="adminhome.html">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
          if(isset($_SESSION['email']))
          {
              echo '
                  <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Welcome,'.$user_name.'<span class="caret"></span></a>
                      <ul class="dropdown-menu" style="background-color:#fff;">
                          <li><a href="logout.php">Logout</a></li>
                      </ul>
                  </li>';
          }
          else
          {
              echo '
              <li><a href="signUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>';
          }
      ?>
    </ul>
  </div>
</nav>
  
<div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home">Add Category</a></li>
      <li><a href="questionpaper.php">Add Questions</a></li>
      <li><a href="#menu2">Leader Board</a></li>
    </ul>
  
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">ADD NEW CATEGORY</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
        <?php
          if(isset($_GET['success']))
          {
            echo'<div class="alert alert-success">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Success.....!</b>Category Added Successfully....!</p>
            </div>';
          }
          else if(isset($_GET['error']))
          {
            echo'<div class="alert alert-danger">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Error.....!</b>Error while Adding category.....!</p>
            </div>';
          }
          else if(isset($_GET['already_exists']))
          {
            echo'<div class="alert alert-info">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Oops.....!</b>Category Already Exists.....!</p>
            </div>';
          }
        ?>

        <form method="post" action="">

          <div class="form-group">
            <label>Select Category Type:</label>
            <select name="cat_type" data-validation="required" class="form-control">
              <option value="">---SELECT---</option>
              <option value="quizcategory">Quiz Categories</option>
            </select>
          </div>

          <div class="form-group">
            <label>Categoy Name: </label>
            <input type="text" id="name" name="cat_name" class="form-control" data-validation="required" placeholder="Enter Category Name" required/>
          </div>

          <div class="form-group">
            <label>Sub Category Category</label>
            <input type="text" id="name" name="subcat_name" class="form-control" data-validation="required" placeholder="Enter Sub-Category Name" required/>
          </div>

          <div class="form-group">
            <input type="submit" name="add_category" class="btn btn-primary btn-block" value="ADD NEW CATEGORY">
          </div>
        </form>
        </div>
      </div>
    </div>


      <?php
        include("connection.php");
        if(isset($_POST['add_category']))
        {
          $cat_type = mysqli_real_escape_string($dbhandle, $_POST['cat_type']);
          $cat_name = mysqli_real_escape_string($dbhandle, $_POST['cat_name']);
          $subcat_name = mysqli_real_escape_string($dbhandle, $_POST['subcat_name']);

          $query = mysqli_query($dbhandle, "SELECT * FROM `category` WHERE sub_cat = '$subcat_name'") or die(mysqli_error($dbhandle));
          $count = mysqli_num_rows($query);

          if($count > 0)
          {
            header("location:adminhome.php?already_exists");
          }
          else
          {
            $sql = mysqli_query($dbhandle, "INSERT INTO `category`(`cat_id`, `cat_type`, `cat_name`, `sub_cat`) VALUES ('0','$cat_type','$cat_name','$subcat_name')") or die(mysqli_error($dbhandle));
            if($query)
            {
              header("location:adminhome.php?success");
            }
            else
            {
              header("location:adminhome.php?error");
            }
          }


        }
      ?>

  
  <script>
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
  });
  </script>
  <script>
      $( document ).ready(function() {
          $( "#name" ).keypress(function(e) {
              var key = e.keyCode;
              if (key >= 48 && key <= 57) {
                  e.preventDefault();
              }
          });
      });
  </script>

</body>
</html>
