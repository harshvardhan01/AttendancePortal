<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
    else if($_SESSION["currentUserCategory"] == "Coordinator")
        include "coordinatorLogin.php";
    else if($_SESSION["currentUserCategory"] == "Faculty")
        include "facultyLogin.php";
    
    else
    {
        session_destroy();
        header("Location: index.php");
    }
}
else
{
    session_destroy();
    header("Location: index.php");
}
?>

<html>
    <head>
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    </head>
    <body>
        <p style="font-size: 40px; color: #D35400;" align="center">
            This site is under Testing phase.
        </p>
        <p style="font-size: 40px; color: #27AE60;" align="center">
            You are requested to give your valuable feedback after going through it.
        </p>
        <p style="font-size: 60px; color: #D4AC0D" align="center">
            Thanks for your time.
        </p>
        <p style="font-size: 50px; color: #D4AC0D" align="center">
            <i class="em em-blush"></i>
        </p>
    </body>
</html>