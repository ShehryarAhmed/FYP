<?php

if(!isset($_SESSION['user']))
{
	header("Location: index.php?id=error&v= You must loggin First");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile page</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
    if(isset($_GET["id"])){
        echo "<div id='".$_GET["id"]."'>".$_GET["v"]."</div>";
    }
    ?>

<div id="wrapper">
    <div id="header">
 <h2>LOGO</h2>
        <a href="logoff.php">Logoff</a>
    </div>
    <div id="content">
        <h2>Welcome: </h2>
    </div>
</div>
</body>
</html>
