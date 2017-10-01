<?php 
session_start();
?>
<html>
<body>
    <?php echo "My name is".$_SESSION["name"];?>
</body></html>