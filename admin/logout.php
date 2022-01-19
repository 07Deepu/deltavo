<?php
session_start();
include("db/connection.php");



if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['user_name']);
    header('Location: login.php');
  
}
// session_start();
//     unset($_SESSION["id"]);
//     unset($_SESSION["name"]);
//     header("Location:login.php");
?>


