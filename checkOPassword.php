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
$sql = "SELECT * from `user` where `email`='$email';";
$result=$conn->query($sql);
if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $dpass = $row["password"];
    if($dpass == $pass)
    {
        
    }
    else
        echo "Please enter correct Password";
}
else
    echo "Please enter correct Password";
?>