<!DOCTYPE html>
<html>
<head>
	<title>Faom</title>
</head>

<?php 
$name = $age = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = get_val($_POST["name"]);
	$age = get_val($_POST["age"]);
}
function get_val($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<body>
<center>
<H1>Heading</H1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Name : <input type="text" name="name"><br>
Age  : <input type="text" name="age"><br>
<input type="submit"><br>

</form></center>
<?php echo $name." ".$age;?>
</body>
</html>