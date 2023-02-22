<html>

<head>
<link rel="stylesheet" href="../css/phpStyle.css">
<title>Add User To DB Page</title>
</head>

<body>
<h1>Add Account Details To Database</h1>

<?php
include("dbconnect.php");

$userNum = $_POST["playerNum"];
$username = $_POST["username"];
$password =$_POST["password"];

$Query = "INSERT INTO userlog (userNum, username, password)
VALUES ('$userNum', '$username', '$password')";

$Result = mysqli_query($con,$Query);

if ($Result){
	echo "User Login details interted";
}
else{
	echo "uable to commplete the process";
}
?>

<form method="link" action="login.php">
<input type="submit" Value="back to login">
</form>

</body>

</html>