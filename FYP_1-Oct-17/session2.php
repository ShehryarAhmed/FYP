<?php
session_start();
$_SESSION["name"]="shery";
?>
<html>
<body>
    <?php echo "Session variable set"?>
    <?php print_r($_SESSION);?>
</body></html>