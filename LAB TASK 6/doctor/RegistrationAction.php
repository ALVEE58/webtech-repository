<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
</head>
<body>
	<body style="background-color: skyblue;">
	<h1>Registration Action</h1>
	<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&& (!empty($_POST['fname'])) ){

		$fname=$_POST['fname'];
		$username=$_POST['username'];
		$passcode=$_POST['passcode'];
		$password=$_POST['password'];




		if(!empty($_POST["passcode"]) && ($_POST["passcode"] == $_POST["password"])) {

		$handle = fopen("Staff.json","a");
		$res=fwrite($handle, json_encode(array('username'=>$username,'password'=>$password,'fullname'=>$fname)). "\n");

		if($res)
		{
			echo "Registration Successful";
		}

		else{
		echo "Error while Saving  !!";
			
		}


	} 
	else{
		echo "confirm password & Entered password are not same";
			
		}

	}
else{
		echo "Please fillup the FullName first !";
			
		}

	?>
	<br>
	<a href="Login.php">Login</a>||<a href="Registration.php">go back</a>

	<br>
	<?php include 'Footer.php'; ?>
</body>
</html>