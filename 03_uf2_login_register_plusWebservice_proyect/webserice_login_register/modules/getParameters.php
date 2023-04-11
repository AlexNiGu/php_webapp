<?php

$username="UNDEFINED";
$password="";
$email="";
$password_Confirm="N";
$newPassword="";
$message="todo correcto";

$error = 0;

$control_Login_Register = TRUE;

//////////////////////////////////////////////

if(isset($_GET["username"])){
    $username=$_GET["username"];  //$_POST
};
if(isset($_GET["password"])){
    $password=$_GET["password"];
};
if(isset($_GET["email"])){
    $email=$_GET["email"];
};
// if(isset($_GET["password_Confirm"])){
//     $password_Confirm=$_GET["password_Confirm"];
//     // echo $password_Confirm;
// };
if(isset($_GET["newPassword"])){
    $newPassword=$_GET["newPassword"];
};
?>