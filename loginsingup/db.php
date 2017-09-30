<?php

function connect_db()
{
    $connectionStatus = mysqli_connect("localhost", "root", "", "loginsingup");
    if(!$connectionStatus){
        echo "Error connecting database";
        exit;
    }

    else
    {
        echo "connected !";
    }

    return $connectionStatus;
}
function find_user($connectionStatus, $username, $password)
    
    {

        $sqls = "SELECT username, password FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connectionStatus,$sqls);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($row['username']== $username AND $row['password'] == $password)
        {
            return true;
        }
        else
        {
           return false;
        }

}
    /*



    $query = "SELECT username, password FROM users WHERE username = '.$username' AND password ='.$password'";
    $result = mysqli_query($connectionStatus, $query);

    // if(mysqli_num_rows($result) > 1){

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($row['username']== $myusername && $row['password']==$mypassword)
        {
            return true;
        }
        else
        {
            return false;
        }



       // return mysqli_fetch_assoc($result);
   // }

    // return false;
}



*/

function signup_user($connectionStatus, $fname, $lname, $username,$password)

{


/*
        $query = "INSERT INTO users('fname','lanme','username','passward') VALUE ('$fname','$lname','$username','$password')";
$result = mysqli_query($connectionStatus,$query);
if(mysqli_affected_rows($connectionStatus)==1){
    return true;
}
return false;
}

*/


$sql="INSERT INTO users (`fname`, `lname`, `username`,`password`) VALUES ('$fname', '$lname','$username','$password')";
$result=(mysqli_query($connectionStatus,$sql));



if($result)
{

return true;
}

else {
    
    return false;

    }
}


?>
