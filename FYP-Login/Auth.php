<?php
$GLOBALS["serverName"] = "localhost";
$GLOBALS["username"]= "root";
$GLOBALS["password"] = "";
$GLOBALS["db"] = "login";
$connect = mysqli_connect($serverName,$username,$password,$db);
function login($name,$pass){
    $sql = "SELECT uName , uPass From users where uName = '$name' and uPass = '$pass'";
    $result = mysqli_query($GLOBALS["connect"],$sql);
    if($result){
        echo "hello" .mysql_error();
    }
    else{
        echo "bye".mysql_error();
    }
    // echo "DB" .$GLOBALS["db"];
}
?>