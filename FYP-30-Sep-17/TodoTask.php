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

</body>
<?php 
public function connectDB()
{
	
}
</html>