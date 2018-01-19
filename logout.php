<?php
session_start();
include "DBConfig.php";
$msg = "Logged out";
$auser = $_SESSION["currentUserEmail"];
$sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
$conn->query($sql);
session_destroy();
header("Location: index.php");
?>