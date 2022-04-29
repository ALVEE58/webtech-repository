//<?php 
//	if ($_SERVER['REQUEST_METHOD'] === "GET" and count($_GET) > 0){setcookie("bgcolour", $_GET['colour'], time() +86400)}

//		$colour = isset($_COOKIE['bgcolour']) ? $_COOKIE['bgcolour'] : 'white';
//?>

<?php
session_start();
if(count($_SESSION)==0){
	header("Location: LogOut.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<style>
	*{
		color: blue;
	}
</style>
</head>
<body>
	<img src="Im1.jpg" height="250" width="250">
	<body style="background-color: skyblue;">
	
	<h1>Welcome to Hospital Management System</h1>
	<br>
	<h3>Home Page for Doctor</h3>
	<p>Welcome <?php echo $_SESSION['uname'];?></p>
	<br><br>

	<a href="StaffProfile.php">Profile</a>||

	<a href="doc.php">Prescription</a>||
	
	<a href="Js.html">Contact admin</a>||


	<a href="LogOut.php">Logout</a>
	<br>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
		Select Page colour:
		<select name="colour">
			<option value="white" selected>"White"</option>
			<option value="#f5e9c5" selected>"Off-White"</option>
		</select>

	</form>

	<?php include 'Footer.php'; ?>
</body>
</html> 