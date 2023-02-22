<html>

<head>
<link rel="stylesheet" href="phpStyle.css">
<title>Login Page</title>
</head>

<body>
<h1>Login Details</h1>

<form action="checkUser.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<h2>Create Account</h2>
<form action="createUser.php" method="post">
<input type="submit">
</form>

</body>

</html>