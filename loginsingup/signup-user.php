 <?php
session_start();
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($fname !="" && $lname != "" && $username != "" && $password != ""){
        include "db.php";

        $connectionStatus = connect_db();
        $status = signup_user($connectionStatus,$fname,$lname, $username, $password );

        if($status==true){
            header("Location: index.php?id=success&v=You are signed up successfully ");
        }else{
            header("Location: sign-up.php?id=error&v=Error: An error acured can not sign up");
        }
    }else{
        header("Location: sign-up.php?id=error&v=Error: All fields mandatory");
    }
}else{
    header("Location: index.php?id=error&v=Pleasen login to your account");
}
?>