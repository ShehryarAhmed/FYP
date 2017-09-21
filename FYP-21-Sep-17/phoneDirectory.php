<html>
	<body>
	<!-- <center>
		<form  method="post" action="getData.php">
		<fieldset>
		<legend>Phone Directory</legend>
		Name :<br>
			<input type="text" name="name"><br>
			Number :<br> 
			<input type="Number" name="num"><br>
				<input type="submit" value ="Submit">
		</fieldset>
			</form>
</center>	
 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sample";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully ";
}

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
$sql = "INSERT INTO table1 (id,name,age) VALUES ('2','shehryar','12')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


</body>
</html>