<!DOCTYPE html>
<html>
<head>
	<title>Faom</title>
	<style>
.error {color: #FF0000;}
</style>
</head>

<?php 
$Err = " is required";
$fname = $lname = $fathername =  $age = $gender = $email = $cellnum = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$fname = get_val($_POST["fname"]);
	
	$lname = get_val($_POST["lname"]);

	$fathername = get_val($_POST["fathername"]);
	
	$age = get_val($_POST["age"]);

	$email = get_val($_POST["e_mail"]);
 
    $cellnum = get_val($_POST["phone_num"]);
   // $gender = get_val($_POST["gender"]);


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
<H1>Add Student Record</H1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
First Name  : <input type="text" name="fname" required><br>
Last Name   : <input type="text" name="lname" required=><br>
Father Name : <input type="text" name="fathername" required><br>
Age         : <input type="text" name="age"><br>
Gender:
              <input type="radio" name="gender" value="female">Female
              <input type="radio" name="gender" value="male">Male<br>
Email       : <input type="text" name="e_mail"><br>
Cell Phone# : <input type="text" name="phone_num" required><br>

<input type="submit"><br>

</form></center>
<?php echo $fname." ".$age;
$fname = ' ';
$age = ' ';
?>

</body>
</html>