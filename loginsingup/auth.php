<?php

if(isset($_POST["submit"]))
{
    include "db.php";
    session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION['user'] == $username;

    if($username != "" && $password != "")

    {
        
        $connectionStatus = connect_db();
        $status = find_user($connectionStatus, $username, $password);

       // if(is_array($status))
       // {
            if($status == true)
            {
            //$_SESSION["users"]= $status["fname"]." ".$status["lname"];
            header("Location: success.php");

            }

        else
        {
            header("Location: index.php?id=error&v=Error:Incorrect username/password");
        }
    } 

    else
    {
            header("Location: index.php?id=error&v=Error: All fields mandatory");
    }

}   
    else
    {
            header("Location: index.php?id=error&v=Pleasen login to your account");
    }

?>