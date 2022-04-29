<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mediinfo";


$sql = "INSERT INTO mediinfo (Name, UnitPrice) VALUES ('Empatab', '10')";

$res = $conn->query($sql);

var_dump($res);

echo "<br><hr><br>";

if ($res === true) {
	echo "Data Inserted Succssfully";
}
else {
	echo "Error while saving";
}

$conn->close();

?>