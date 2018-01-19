<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
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
            #branch, #abbr
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
        <div class="div-content">
            <h1 align="center">Add New Branch</h1>
            <form method="post" action="AddBranchPost.php">
                <label for="branch">Name of Branch</label>
                <input type="text" id="branch" name="bname" required />

                <label for="abbr">Abbreviation for Branch</label>
                <input type="text" id="abbr" name="baname" required />
                <input type="submit" value="Add Branch">
            </form>
        </div>
    </body>
</html>