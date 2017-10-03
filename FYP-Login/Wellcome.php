<html><body>
<<form action="" METHOD="POST">
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