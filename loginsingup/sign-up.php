<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup page</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="wraper">
    <?php
    if(isset($_GET["id"])){
        echo "<div id='".$_GET["id"]."'>".$_GET["v"]."</div>";
    }
    ?>
    <div id="signup-wraper">
        <h2>signup</h2>
         <form method="post" action="signup-user.php">
        <input type="text" name="fname" placeholder="First name"><br>
        <input type="text" name="lname" placeholder="last name"><br>

        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit" name="submit" value="ok">sign up</button>
</form>
    </div>
    <div id="signup_info">
        Please login  <a href="index.php">login here</a>
    </div>
</div>
</body>
</html>