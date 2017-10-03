
<html>
<title>LOGIN</title>
<body>
<form action="" method="POST" >
<fieldset style="margin:10%;" >
<legend>LOGIN</legend>
<b>User Name <br>
<input type="text" name="userName" required><br>
Password <br>
<input type="password" name="userPass" required><br>
<input type="submit" name="login" value="LOGIN"style="margin-top:5px">
Don't have account? <a href="signup.php">Sign up</a>

</fieldset>
</form>
</body>
</html>
<?php
include ("Auth.php");
session_start();
if(isset($_POST["login"])){
    if(empty($_POST["userName"]) or empty($_POST["userPass"])){
        echo "Please enter name and password";
        exit;
    }
    else{
$userName = $userPass = "";
$userName=$_POST["userName"];
$userPass=$_POST["userPass"];
login($userName,$userPass);}
}
?>