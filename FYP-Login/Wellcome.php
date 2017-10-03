<html><body>
<h1>hello
<?php
session_start();
echo $_SESSION['login_user']
?>
</h1>
<form action="" METHOD="POST">
    <input type="submit" name="logout" value="LOGOUT">
    </form>
</body>
</html>
<?php
include("Auth.php");
if(isset($_POST['logout'])){
logout();
}
?>