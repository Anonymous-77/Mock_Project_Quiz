<?php include('session.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quibble-Home</title>
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
      <a class="navbar-brand" href="index.php">QUIZ-LET</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="about.php">Aboutus</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <?php
          if(isset($_SESSION['username']))
          {
              echo '
                  <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Welcome,'.$user_name.'<span class="caret"></span></a>
                      <ul class="dropdown-menu" style="background-color:#fff;">
                          <li><a href="user_profile.php">View Profile</a></li>
                          <li><a href="logout.php">Logout</a></li>
                      </ul>
                  </li>';
          }
          else
          {
              echo '
              <li><a href="signUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>';
          }
      ?>
    </ul>
  </div>
</nav>
  
<div class="container">
    <ul class="nav nav-tabs">
      <li class="active" name="sports"><a href="#home">Sports</a></li>
      <?php
          include("connection.php");
          if(isset($_POST['sports'])){
            $sql = mysqli_query($dbhandle, "SELECT `sub_cat` FROM `category` WHERE cat_name = 'Sports'") or die(mysqli_error($dbhandle));
          while($row = mysqli_fetch_array($sql))
          {
            echo '
            <li>'.$row['sub_cat'].'</li>';
          }
          }
        ?>
      <li><a href="#menu1">Politics</a></li>
      <li><a href="#menu2">Movies</a></li>
    </ul>
  
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="container">
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cricket</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse ">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                    <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                    <a href="./Quiz-LeaderBoard/index.html">
                    <button type="button" class="btn btn-danger"  style="margin-left:110px;">Leaderboard</button></a>
                    </div>
                </div>
                
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Basketball</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                    <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                    <a href="./Quiz-LeaderBoard/index.html">
                    <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                    </div>
                </div>

              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Football</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                      <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                     
                    </div>
                </div>
                
                
              </div>
              
            </div> 
          </div>
              
      </div>
      
      <div id="menu1" class="tab-pane fade">
        <div class="container">
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Collapsible Group 1</a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse in">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                      <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                      
                    </div>
                </div>
            
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Collapsible Group 2</a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                    <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Collapsible Group 3</a>
                  </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                      <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                      
                    </div>
                </div>
              </div>
            </div> 
          </div>
              
      </div>
      
    
     
      <div id="menu2" class="tab-pane fade">
        <div class="container">
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Collapsible Group 1</a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse in">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                      <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                      
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Collapsible Group 2</a>
                  </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                      <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                      </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Collapsible Group 3</a>
                  </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  <div style="display: flex;margin-bottom: 20px;">
                    <a href="./quiz/index.html">
                    <button type="button" class="btn btn-primary" style="margin-left: 20px;">StartQuiz</button></a>
                      <a href="./Quiz-LeaderBoard/index.html">
                      <button type="button" class="btn btn-danger" style="margin-left:110px;">Leaderboard</button></a>
                    </div>
                    </div>
                </div>
              </div>
            </div> 
          </div>    
          
      </div>
  
  <script>
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
  });
  </script>
  
  

</body>
</html>
