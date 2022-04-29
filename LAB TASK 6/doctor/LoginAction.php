<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$handle = fopen("Staff.json","r");
		$data=fread($handle, filesize("Staff.json"));
		$data=explode("\n", $data);
		$isValid = false;
		for($i=0;$i<count($data)-1;$i++){
			$json= json_decode($data[$i]);
			if($username===$json->username and $password===$json->password){
				$isValid=true;
				break;
			}
		}
		if($isValid){
			session_start();
			$_SESSION['uname']=$username;
			header("Location: Home.php?uname=".$username);
		}
		else{
			echo "Login Failed !!";
		}

	}

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Login Action</title>
	</head>
	<body>
		<br><br>
	<a href="Login.php">Login</a> | <a href ="Registration.php">Registration</a>
	<br>
	<?php include 'Footer.php'; ?>
	</body>
	</html>