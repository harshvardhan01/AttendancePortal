<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
    else if($_SESSION["currentUserCategory"] == "Coordinator")
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
            #sub, #subabbr
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
            <h1 align="center">Add Subject</h1>
            <form method="post" action="AddSubjectPost.php">
                <label for="branch">Branch</label>
                <select id="branch" name="slist" required>
                    <option value="" disabled selected>- - Select Branch - -</option>
                    <?php
                    $sql = "SELECT * from Branches;";
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

                <label for="semq">Semester</label>
                <select id="semq" name="sem" required>
                    <option value="" disabled selected>- - Select Semester - -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                
                <label for="sub">Subject Name</label>
                <input id="sub" type="text" name="sname" required />
                
                <label for="subabbr">Abbreviation for Subject</label>
                <input id="subabbr" type="text" name="saname" required />
                
                <input type="submit" value="Add Branch">
            </form>
        </div>
    </body>
</html>