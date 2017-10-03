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

function signup($fname,$lname,$uName,$uPass){
    $sqlInsert="INSERT INTO users(fname,lnamw,uName,uPass) VALUES ('$fname','$lname','$uName','$uPass')";
    
    if ($GLOBALS["connect"]->query($sqlInsert) === TRUE) {
        $_SESSION['login_user'] = $uName;
    header("location:Wellcome.php");
    } else {
        echo "Error: " . $sql . "<br>" . $GLOBALS["connect"]->error;
        // header("location:SignUp.php");
  
    }
}
function logout(){
    session_start();
    
    if(session_destroy()) {
       header("Location: login.php");
    }
}

?>