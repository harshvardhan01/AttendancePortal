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

<!DOCTYPE html>
<html>
    <head>
        <title>Add Branch</title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <style>
            input[type="text"]
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 15px;
            }
        </style>
    </head>
    
    <body>
        <div class="div-content" style="margin-top: 5%;">
            <h1 align="center">Add Faculty</h1>
            <form method="post" action="AddFacultyPost.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="fname" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="femail" required>
                
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="fphone" required>
                
                <input type="submit" value="Add Faculty">
            </form>
        </div>
        <input type="submit" value="Assign Subject to Faculty" style="margin-top: 5%" onclick="addSubject();">
    </body>
    <script>
        function addSubject()
        {
            window.location.href = "AssignSubject.php";
        }
    </script>
</html>