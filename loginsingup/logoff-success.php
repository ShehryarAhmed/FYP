<?php
session_start();
if(isset($_SESSION["user"])){
    header("Refresh: 3; URL=profile.php");

}
else{
    header("Refresh: 3; URL=index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup page</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="success-info">
        <h2>You are logged off successfully </h2>

    </div>
</div>
</body>
</html>
