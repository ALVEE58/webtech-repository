

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<style>
*{
		color: blue;
	}
</style>

<body>
	<body style="background-color: skyblue;">

	<img src="Im1.jpg" height="250" width="250">

	<h1>Login for Doctor</h1>
	<form action="LoginAction.php" method="POST">

		Username:<input type="text" name="username">
		<br><br>
		Password:<input type="Password" name="password">
		<br><br>
		<input type="submit" name="submit" value="Login">

		<br>

	
	<br>
	Don't have account ? <a href="Registration.php">Sign up </a> here.
	<br>


	<br>
	<?php include 'Footer.php'; ?>


</body>
</html>