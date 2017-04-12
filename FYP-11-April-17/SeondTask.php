<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "asher";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "INSERT INTO shabbos (name, cellNUm) VALUES ('shabbo1','123456789')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

	<body>

	</body>
	</html>