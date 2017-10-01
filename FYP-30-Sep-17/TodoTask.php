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
<center>
<form method="POST">
	<fieldset style="margin : 5%">
		<legend><h2>Enter Your Tasks</h2></legend>
		<input type="text" name="taskTitle" placeholder="enter taskTitle" value="" required>
		<input type="text" name="taskTime" placeholder="enter taskTime" value="">
		<input type="submit" value="Add" name="addBtn"> 
	</fieldset>
</form>
<?php 
	if(isset($_POST["addBtn"])){
		connectDB();
		insertIntoTable($_POST["taskTitle"],$_POST["taskTime"]);	
        
	}

?>
<fieldset style="margin: 5%">
 <table style="width: 100%">
 <legend> <h2>Your Tasks</h2></legend>

	<tr>
	<th> Task Number</th>
	<th> Task Title</th>
	<th>Task Time</th>
 	</tr>	
   <?php  readIntoTable(); ?>

</table>
	</fieldset>
    
<!-- task done -->
<form method="POST">
<fieldset style="margin : 5%">
		<legend><h2>Enter Your  Done Tasks Title</h2></legend>

</fielset>
<input type="text" name="doneTask">
<input type="submit" name="Delete" value="Done"  >

</form>
</center>
<?php 
	if(isset($_POST["Delete"])){
		connectDB();
		deleteDoneTask($_POST["doneTask"]); 
		header("Refresh:0");
		
	}

?>
<center>
<!-- task update -->
<form method="POST">
<fieldset style="margin : 5%">
		<legend><h2>Update Your  Done Tasks Title</h2></legend>

</fielset>
<input type="text" name="taskID" placeholder="enter Task id">
<input type="text" name="updateTask" placeholder="Update task">
<input type="submit" name="update" value="update"  >

</form>
</center>

<?php 
	if(isset($_POST["update"])){
		connectDB();
		updateTask($_POST["taskID"],$_POST["updateTask"]);
		header("Refresh:0");
		
	}

?>
</body>
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
// echo "Connected successfully";
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
     echo "<tr> <th>" . $row["taskId"]. " </th> <th> " . $row["taskTitle"]. "</th> <th>  " . $row["taskTime"]. "</th> </tr>";

    }
} else {
    echo "0 results";
}
$conn->close();

}

function deleteDoneTask($doneTask){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "todo";
		$conn = new mysqli($servername, $username, $password,$db);
		$sql = "DELETE FROM tasks where taskTitle='$doneTask'";
		$result = $conn->query($sql);
		if(!$result){
		echo "NOT Found";
		}
		else {
			echo "Deleted";
		}
		$conn->close();
		
	}
	function updateTask($task,$updateT){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "todo";
			$conn = new mysqli($servername, $username, $password,$db);

			$sql = "UPDATE tasks SET taskTitle='$updateT' where taskId='$task'";
			$result = $conn->query($sql);
			if(!$result){
			echo "NOT Found";
			}
			else {
				echo "Update";
			}
			$conn->close();
			
		}
		
?>
</html>
