<?php

if(!isset($_GET['regno']))
{

header("Location: home.php");
exit();

}

$regno = $_GET['regno'];

if ($regno%3 == 0)
{   
	$url = "page2.php?RegisterNumber=" . $regno;
	echo "Hello! Click to start the test <a href='$url'>page2</a>";
}

elseif ($regno%3 == 1)
{
	$url = "page3.php?RegisterNumber=" . $regno;
	echo "Hello! Click to start the test <a href='$url'>page3</a>";
}
else 
{
	$url = "page4.php?RegisterNumber=" . $regno;
	echo "Hello! Click to start the test <a href='$url'>page4</a>";
}

?>