<?php
    include "DBConfig.php";
session_start();
if(!$_SESSION["currentUserEmail"])
{
    session_destroy();
    header("Location: index.php");
}


    $auser = $_POST["auser"];
    $apassword = $_POST["apassword"];
    
    $apassword = md5($apassword);
    
    $sql = "SELECT * from `user` where `email`='$auser' and `password`='$apassword';";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        
        session_start();
        
        $_SESSION["currentUserEmail"] = $auser;
        $_SESSION["currentUserName"] = $row["name"];
        $_SESSION["currentUserCategory"] = $row["category"];
        
        $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('Logged in', '$auser')";
        $conn->query($sql);
        
        header("Location: Home.php");
    }
    else
        echo "No user with this email found";
?>