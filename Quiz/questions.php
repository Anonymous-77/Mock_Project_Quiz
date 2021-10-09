<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quiz App</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Exo:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/questions.css">
</head>

<body>
    <div id="container">
        <!--    Start Section     -->
        <div id="start">Start Quiz</div>

        <!--    Guide Section    -->
        <div id="guide">
            <h2>Quiz Guide</h2>
            <h4>1. You Have Only 20 Seconds For Each Questions.</h4>
            <h4>2. Once You Select Your Answer.It Can't Be Undone.</h4>
            <h4>3. You'll Get Points On The Basic Of Your Correct Answers.</h4>
            <h4>4. You Can't Exit From The Quiz While You Are Playing.</h4>
            <div id="button">
                <button id="exit">Exit</button>
                <button id="continue">Continue</button>
            </div>
        </div>

        <!--    Quiz Section    -->
        <div id="quiz">
            <div id="quiz_header">
                <h5>Amazing Quiz App</h5>
                <div id="timer">
                    <h6>Time Left</h6>
                    <h6 id="time">00</h6>
                </div>
            </div>

            <!--     Quiz Questions  -->

            <div id="question">
                <h2 id="questionNo"></h2>
                <h2 id="questionText"></h2>
            </div>

            <!--       Quiz Choices   -->

            <div id="optionList">
                <h4 class="choice_que" id="option1"></h4>
                <h4 class="choice_que" id="option2"></h4>
                <h4 class="choice_que" id="option3"></h4>
                <h4 class="choice_que" id="option4"></h4>
            </div>

            <!--  Answers Section-->

            <div id="answersSection">
                <h3 id="total_correct">3 Of 10 Questions</h3>
                <h3 id="next_question">Next</h3>
            </div>
        </div>
        <!--   Result Section  -->
        <div id="result">
            <i class="fas fa-trophy"></i>
            <h6>You Are Completed The Quiz</h6>
            <h6 id="points">You Got 4 Out Of 10</h6>
            <button id="quit">Quit Quiz</button>
            <button id="startAgain">Start Again</button>
        </div>
    </div>
    <script src="js/questions.js"></script>
    <script src="js/script_question.js"></script>
</body>

</html>
