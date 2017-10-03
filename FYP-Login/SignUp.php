<html>
<body>

<form method="post" action="">

<fieldset style="margin:10%;" >
<legend>SIGNUP</legend>
<b>First Name <br>
        <input type="text" name="fname" placeholder="First name" required><br>
<b>Last Name <br>
        <input type="text" name="lname" placeholder="last name" required><br>
<b>User Name <br>
        <input type="text" name="userName" placeholder="username" required><br>
<b>Password<br>
        <input type="password" name="userPass" placeholder="password" required><br>
        <input type="submit" name="signup" value="Create Account">
</form>
</body>
</html>
<?php
include ("Auth.php");
session_start();
if(isset($_POST["signup"])){
    if(empty($_POST["userName"]) or empty($_POST["userPass"])){
        echo "Please enter Full detail";
        exit;
    }
    else{
$fname = $lname = $userName = $userPass = "";
$fname=$_POST["fname"];
$lname = $_POST["lname"];
$userName=$_POST["userName"];
$userPass=$_POST["userPass"];
signup($fname,$lname,$userName,$userPass);
}
}