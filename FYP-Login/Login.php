
<html>
<title>LOGIN</title>
<body>
<form action="" method="POST" >
<fieldset style="margin:10%;" >
<legend>LOGIN</legend>
<b>User Name <br>
<input type="text" name="userName" require><br>
Password <br>
<input type="password" name="userPass" require><br>
<input type="submit" name="login" value="LOGIN"style="margin-top:5px">
<input type="submit" name="login" value="SIGNUP"style="margin-top:5px">
</fieldset>
</form>
</body>
</html>
<?php
include ("Auth.php");
if(isset($_POST["login"])){
$userName = $userPass = "dsad";
$userName=$_POST["userName"];
$userPass=$_POST["userPass"];
login($userName,$userPass);}
?>