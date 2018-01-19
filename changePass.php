<?php

include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    // session has been started
}
else
{
    session_destroy();
    header("Location: index.php");
}

$pass =  $_GET["pass"];
$pass = md5($pass);
$email = $_SESSION["currentUserEmail"];
$sql = "UPDATE `user` SET `password` = '$pass' WHERE `user`.`email` = '$email';";
if($conn->query($sql))
{
    $msg = "Password changed";
    $auser = $_SESSION["currentUserEmail"];
    $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
    $conn->query($sql);
    
    echo "Password Successfully changed";
}
else
    echo "Contact admin";
?>