<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Staff Registration Page</title>
</head>
<style>
	*{
		color: green;
	}
</style>

<body>

	<body style="background-color: skyblue;">

	<img src="Im1.jpg" height="250" width="250">

	<h1>Registration Page</h1>
	<form action="RegistrationAction.php" method="POST">

		Fullname:<input type="text" name="fname">
		<br><br>

		Username:<input type="text" name="username">
		<br><br>

		Password:<input type="Password" name="passcode">
		<br><br>

		Confirm Password:<input type="Password" name="password">
		<br><br>
		<input type="submit" name="submit" value="Register">
		

	</form>
	<br>
	Already have an account ? <a href="Login.php"> Login </a> .

	<br>
	<?php include 'Footer.php'; ?>


</body>
</html>