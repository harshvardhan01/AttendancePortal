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
        
        <script>
            function getBatch()
            {
                var branch = document.getElementById("branch").value;
                var sem = document.getElementById("sem").value;
                
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("batch").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getBatch.php?branch=" + branch + "&sem=" + sem, true);
                xmlhttp.send();
            }
            
            function getSubject()
            {
                var branch = document.getElementById("branch").value;
                var sem = document.getElementById("sem").value;
                            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("subject").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getsubject.php?q=" + branch + "&p=" + sem, true);
                xmlhttp.send();
                
                getBatch();
            }
        </script>
    </head>
    
    <body>
        <div class="div-content">
            <h1 align="center">Assign Subjects</h1>
            <form method="post" action="AssignSubjectPost.php">
                <label for="branch">Branch</label>
                <select id="branch" name="fbranch" required>
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
                
                <label for="sem">Semester</label>
                <select id="sem" name="fsem" required onchange="getSubject();">
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

                <label for="batch">Batch</label>
                <select id="batch" name="fbatch" required>
                    <option value="">- - Select Batch - -</option>
                </select>
                
                <label for="subject">Subject</label>
                <select id="subject" name="fsubject" required>
                    <option value="">- - Select Subject - -</option>
                </select>
                
                <label for="name">Faculty Name</label>
                <select id="name" name="femail" required>
                    <option value="" disabled selected>- - Select Faculty - -</option>
                    <?php
                    $sql = "SELECT * from `user` where `category`='Faculty' or `category`='Coordinator';";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value='" . $row['email'] . "'>" . $row['name'] . " (" . $row['email'] . ")" . "</option>";
                        }
                    }
                    ?>
                </select>
                
                <input type="submit" value="Assign Subject">
            </form>
        </div>
    </body>
</html>