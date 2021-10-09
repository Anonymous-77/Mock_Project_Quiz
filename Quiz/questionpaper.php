<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin CRUD</title>
    <link rel="stylesheet" href="css/styleIndex.css">
    <script src="js/item.js"></script>
    <script src="js/itemOperation.js"></script>
    <script src="js/controller.js"></script>
</head>
<body>
    <div class="tile">    
    <form method="POST" action="">
    <Fieldset> 

        <a href="adminhome.php" style="color: blue; text-decoration: none; font-size: 16px;">BACK</a><br><br>

        <?php
          if(isset($_GET['success']))
          {
            echo'<div class="alert alert-success">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Success.....!</b>Question Added Successfully....!</p>
            </div>';
          }
          else if(isset($_GET['error']))
          {
            echo'<div class="alert alert-danger">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Error.....!</b>Error while Adding Question.....!</p>
            </div>';
          }
          else if(isset($_GET['already_exists']))
          {
            echo'<div class="alert alert-info">
            <a herf="#" class="close" data-dismiss="alert">&times;</a>
            <p><b>Oops.....!</b>Question Already Exists.....!</p>
            </div>';
          }
        ?>

         
        <legend><h1>Quetions for test</h1></legend>
        <div class="display">
           <table>
            
            <tr>
                <td><label for="">Question no</label></td>
                <td><input type="number" id="quesid" name="q_no"></label></td>
            </tr>
            <tr>
                <td><label for="">Category Name</label></td>
                <td><input id="option1" type="text" name="cat_name" onfocus="this.value='' " placeholder="Ex: Movies"></td>
            </tr>
            <tr>
                <td><label for="">Sub Category</label></td>
                <td><input id="option1" type="text" name="sub_cat" onfocus="this.value='' " placeholder="Ex: Bollywood/Hollywood"></td>
            </tr>
            <tr>
                <td><label for="">Question</label></td>
                <td><textarea  id="ques" cols="30" rows="5" name="question"></textarea></td>
            </tr>
            <tr>
                <td><label for="">Option 1</label></td>
                <td><input id="option1" type="text" name="option1" onfocus="this.value='' " placeholder="Enter option 1"></td>
            </tr>
            <tr>
                <td><label for="">Option 2</label></td>
                <td><input id="option2" type="text" name="option2" onfocus="this.value='' " placeholder="enter option 2"></td>
            </tr>
            <tr>
                <td><label for="">Option 3</label></td>
                <td><input id="option3" type="text" name="option3" onfocus="this.value='' " placeholder="Enter option 3"></td>
            </tr>
            <tr>
                <td><label for="">Option 4</label></td>
                <td><input id="option4" type="text" name="option4" onfocus="this.value='' " placeholder="Enter option 4"></td>
            </tr>
            <tr>
                <td><label for="">Answer</label></td>
                <td><input id="ans" type="number" name="answer" onfocus="this.value='' " placeholder="Enter correct option no "></td>
            </tr>
        </table>
        <!-- <h2>Total questions entered :<span id="total"></span><span id="marktotal"></h2> -->
        <table>
            <tr>
                <td><button id="add" name="add">Add</button></td>
                <td><button id="update">Update</button></td>
                <td><button id="delete">Delete</button></td>
                <td><button onclick="document.getElementById('ques').value = '' " id="clr">Clear</button></td>

            </tr>
        </table>
        </div>
    </Fieldset>
</form>

    <?php
        include("connection.php");
        if(isset($_POST['add']))
        {
              $cat_type = $_POST['cat_name'];
              $sub_cat = $_POST['sub_cat'];
              $question_no = $_POST['q_no'];
              $question = $_POST['question'];
              $option1 = $_POST['option1'];
              $option2 = $_POST['option2'];
              $option3 = $_POST['option3'];
              $option4 = $_POST['option4'];
              $answer = $_POST['answer'];


          $query = mysqli_query($dbhandle, "SELECT * FROM `questions` WHERE question = '$question'") or die(mysqli_error($dbhandle));
          $count = mysqli_num_rows($query);

          if($count > 0)
          {
            header("location:questionpaper.php?already_exists");
          }
          else
          {
            $sql = mysqli_query($dbhandle, "INSERT INTO `questions`(`q_id`, `category_name`, `sub_category`, `question_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ('0','$cat_type','$sub_cat','$question_no','$question','$option1','$option2','$option3','$option4','$answer')") or die(mysqli_error($dbhandle));
            if($query)
            {
              header("location:questionpaper.php?success");
            }
            else
            {
              header("location:questionpaper.php?error");
            }
          }
        }
      ?> 
    <br>
    <fieldset>
        <legend>Question List</legend>
        <div class="display">
        <table border="1" style="text-align: center;">
            <thead>
                <tr>
                    <th>SL.No</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Question no</th>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead> 
            

            <tbody id="itemtable">
                
            <?php
                include("connection.php");
                $sql = mysqli_query($dbhandle, "SELECT `category_name`, `sub_category`, `question_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer` FROM `questions`") or die(mysqli_error($dbhandle));
                $i = 1;
                while($row = mysqli_fetch_array($sql))
                {
                  echo '<tr>
                  <td>'.$i++.'</td>
                  <td>'.$row['category_name'].'</td>
                  <td>'.$row['sub_category'].'</td>
                  <td>'.$row['question_no'].'</td>
                  <td>'.$row['question'].'</td>
                  <td>'.$row['option1'].'</td>
                  <td>'.$row['option2'].'</td>
                  <td>'.$row['option3'].'</td>
                  <td>'.$row['option4'].'</td>
                  <td>'.$row['answer'].'</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                  </td>
                  
                  </tr>';
                }
              
              ?>

            </tbody>           
        </table>
    </div>
    </fieldset>
    </div>
</body>
</html>