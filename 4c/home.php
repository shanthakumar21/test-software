<?php


if(isset($_POST['regno']))
{
$regno = $_POST['regno'];
$url = "page1.php?regno=" . $regno;
header('Location: ' . $url);
exit();
}


?>


<html>
<head>
	<title>Mock Interview Test</title>
</head>
<body>
	<form method="post" action="home.php">
		<input type="number" name="regno" placeholder="Enter Register Number">
		<input type="submit" value="Save">
	</form>
</body>
</html>
