<?php
   include('Auth.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($GLOBALS["connect"],"SELECT uName From users where uName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['uName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>