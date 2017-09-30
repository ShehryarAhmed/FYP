<!DOCTYPE html>
<html>
<head>
	<title>Todo Task</title>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>
<body>
<form method="POST">
	<fieldset style="width: 50%">
		<legend>Enter Your Tasks</legend>
		<input type="text" name="taskTitle" placeholder="enter taskTitle" value="">
		<input type="text" name="taskTime" placeholder="enter taskTime" value="">
		<input type="submit" value="Add"> 
	</fieldset>
</form>
<?php connectDB();
	  insertIntoTable($_POST["taskTitle"],$_POST["taskTime"]);	
?>
	<fieldset style="margin: 20%">
<table style="width: 100%">
		
	<tr>
	<th> Task Number</th>
	<th> Task Title</th>
	<th>Task Time</th>
	</tr>

	<tr>
	<th> <?php echo $_POST["taskTitle"]?></th>
	<th> <?php echo $_POST["taskTitle"]?></th>
	<th> <?php echo $_POST["taskTitle"]?></th>
	</tr>
	

</table>
	</fieldset>

<?php 
function connectDB()
{
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "todo";
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}
}
function insertIntoTable($title,$time){
$servername = "localhost";
$username = "root";
$password = "";
$db = "todo";
	$conn = new mysqli($servername, $username, $password,$db);
   $sql = "INSERT INTO tasks (taskTitle,taskTime) VALUES ('$title','$time')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>

</body>
</html>
