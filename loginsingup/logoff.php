<?php
session_start();

if(session_destroy()) {

    header("Location: index.php?id=success&v= Loggout successfully");
    
}
?>