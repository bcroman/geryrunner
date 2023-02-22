<html>

<head>
<link rel="stylesheet" href="phpStyle.css">
<title>Check User Page</title>
</head>

<body>
<h1>Checking Details</h1>

<?php
include("dbconnect.php");

$username = $_POST["username"];
$password =$_POST["password"];

$Query = " SELECT username, password FROM userlog
WHERE username='$username' AND password='$password';";

$Result = mysqli_query($con,$Query);

$NumResults = mysqli_num_rows($Result);

if ($NumResults == 1){
	echo "Found User";
}

else{
	echo "Can't Found User";
}
?>

<form method="link" action="highscore.php">
<input class="form" type="submit" value="Home Page">
</form>

</body>

</html>