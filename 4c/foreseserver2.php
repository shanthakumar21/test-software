<html>
<body>



<?php

//var_dump($_POST);

    $correct = 0;
	if ($_POST["question1"] == "abcdef") {
	    //echo "</br> queustion one is correct";
		$correct++;
    }
	if ($_POST["question2"] == "Kabul") {
	//echo "</br> queustion 2 is correct";
		$correct++;
    }
	if ($_POST["question3"] == "Albany") {
	//echo "</br> queustion 3 is correct";
		$correct++;
	}

echo "</br> Your Score is ".$correct;


$servername = "localhost";
$username = "root";
$password = "watermelon";
$dbname = "forese";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Results (register_no, score)
VALUES (".$_POST["reg_number"].", ".$correct.")";


echo "</br>sql string is: ". $sql;


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?><br>

</body>
</html>
