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
		<input type="submit" value="Add" name="addBtn"> 
	</fieldset>
</form>
<?php 
	if(isset($_POST["addBtn"])){
		connectDB();
	    insertIntoTable($_POST["taskTitle"],$_POST["taskTime"]);	
	}
	readIntoTable();

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
    echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
}
function readIntoTable(){
	$servername = "localhost";
$username = "root";
$password = "";
$db = "todo";
	$conn = new mysqli($servername, $username, $password,$db);
    $sql = "select * FROM tasks";
    $result = $conn->query($sql);
   if ($result->num_rows > 0 ) {
  while($row = $result->fetch_assoc()) {
        echo "id: " . $row["taskId"]. " - Name: " . $row["taskTitle"]. " " . $row["taskTime"]. "<br>";
    }
} else {
    echo "0 results";
}
}
function write(){
	  	  	echo "hello";
	  	  }

?>

</body>
</html>
