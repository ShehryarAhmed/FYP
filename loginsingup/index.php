<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="wraper">
    <?php
    if(!isset($_GET["id"])){
        echo "<div id='".$_GET["id"]."'>".$_GET["v"]."</div>";
    }
    ?>
    <div id="login-wraper">
        <h2>Login</h2>
        <form method="post" action="auth.php">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit" name="submit"> login </button>
        </form>
        <div id="signup_info">
            Don't have account? <a href="sign-up.php">Sign up</a>
        </div>
    </div>
</div>
</body>
</html>