<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Refresh: 5; url=Profile.php");
    echo "Logged In successfully";
    exit;

}



else
{
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success page</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="success-info">
        <h2>You are successfully authenticated</h2>
        <h4>Redirecting to user Profile</h4>
    </div>
</div>
</body>
</html>
