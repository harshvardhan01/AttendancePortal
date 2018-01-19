<?php
    include "DBConfig.php";

    $aname = $_POST["aname"];
    $aphone = $_POST["aphone"];
    $aemail = $_POST["aemail"];
    $apassword = $_POST["apassword"];
    $acategory = $_POST["acategory"];

    $apassword = md5($apassword);

    $sql = "INSERT INTO `user` (`name`, `email`, `phone`, `password`, `category`) VALUES ('$aname', '$aemail', '$aphone', '$apassword', '$acategory');";

    if($conn->query($sql))
        echo "User added successfully";
    else
        echo "User with this email already exist";
?>