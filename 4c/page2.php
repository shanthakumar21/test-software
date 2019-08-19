<!DOCTYPE html>
<html>
<head>

<title>MOCK PLACEMENT TEST </title>
<link href ="style.css" rel ="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src = "main.js"></script>

</head>


<body>

<h1>Get Started! You Have 30 Minutes !</h1>

<div>Time : <span id="timer"></span></div>
<input id = "button" type = "button" value = "Time starts!" onclick = "starttimer();">






<form method="post" id = "quiz" action="foreseserver.php" name = "quiz">

<input type="hidden" name="reg_number" value=<?php echo ($_GET["RegisterNumber"]); ?>>
<p class = "questions">What is the capital of rhode island?</p>
<input id = "textbox" type = "text" name = "question1">

<p class = "questions">What is the capital of afghanisthan?</p>
<input type = "radio" id = "mc" name = "question2" value = "Kabul">kabul<br>
<input type = "radio" id = "mc" name = "question2" value = "dabul">dabul<br>

<p class = "questions">What is the capital of New York?</p>

<input type = "radio" id = "mc" name = "question3" value = "Albany"> Albany<br>
<input type = "radio" id = "mc" name = "question3" value = "All Benny's"> All Benny's<br>


<!-- <input id = "button" type = "button" value = "I'm finished!" onclick = "check();"> -->

<input type="submit">
</form>

<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>

</div>
</html>

</body>





