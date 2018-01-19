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
            <h1 align="center">Add Co-ordinator</h1>
            <form method="post" action="AddCoordinatorPost.php">
                <label for="branch">Branch</label>
                <select id="branch" name="bname" required>
                    <option value="" disabled selected>- - Select Branch - -</option>
                    <?php
                    $sql = "SELECT * from branches;";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value='" . $row['abbr'] . "'>" . $row['branchname'] . "</option>";
                        }
                    }
                    ?>
                </select>

                <label for="cname">Coordinator Name</label>
                <select id="cname" name="coemail" required>
                    <option value="" disabled selected>- - Select New Coordinator - -</option>
                    <?php
                    $sql = "SELECT * from `user` where `category`='Faculty';";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value='" . $row['email'] . "'>" . $row['name'] . "(" . $row['email'] . ")" . "</option>";
                        }
                    }
                    ?>
                </select>
                <input type="submit" value="Add Co-ordinator">
            </form>
        </div>
    </body>
</html>