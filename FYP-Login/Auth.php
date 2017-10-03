<?php
$GLOBALS["serverName"] = "localhost";
$GLOBALS["username"]= "root";
$GLOBALS["password"] = "";
$GLOBALS["db"] = "login";
$GLOBALS["connect"] = mysqli_connect($serverName,$username,$password,$db);

function login($name,$pass){
    $sql = "SELECT uName , uPass From users where uName = '$name' and uPass = '$pass'";
    $result = mysqli_query($GLOBALS["connect"],$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['login_user'] = $name;
        header("location:Wellcome.php");
    }
    else{
        echo "user Name or password wrong";
    }
    // echo "DB" .$GLOBALS["db"];
}

function logout(){
    session_start();
    
    if(session_destroy()) {
       header("Location: login.php");
    }
}
?>