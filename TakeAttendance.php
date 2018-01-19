<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
    else if($_SESSION["currentUserCategory"] == "Co-ordinator")
        include "coordinatorLogin.php";
    else if($_SESSION["currentUserCategory"] == "Faculty")
        include "facultyLogin.php";
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
        <title>Take Attendance</title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <script>
            function getSubject()
            {
                var branch = document.getElementById("b").value;
                var sem = document.getElementById("x").value;
                            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("s").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getsubject.php?q=" + branch + "&p=" + sem, true);
                xmlhttp.send();
                
                getBatch();
            }
            function getBatch()
            {
                var branch = document.getElementById("b").value;
                var sem = document.getElementById("x").value;
                
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("batchSelect").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getBatch.php?branch=" + branch + "&sem=" + sem, true);
                xmlhttp.send();
            }
        </script>
        <style>
            #pdate
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
        <div class="div-content" style="margin-top: 1%">
            <h1 align="center">Take Attendance</h1>
            <form action="attendance.php" method="post">
                <label for="b">Branch</label>
                <select id="b" name="branch" required >
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

                <label for="x">Semester</label>
                <select name="sem" onchange="getSubject();" id="x">
                    <option value="" diabled selected>- - Select Semester - -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                    
                <label for="batchSelect">Batch</label>
                <select id="batchSelect" name="batch" required>
                    <option value="" disabled selected>- - Select Batch - -</option>
                </select>
                
                <label for="s">Subject</label>
                <select name="subject" id="s" required>
                    <option value="">- - Select Subject - -</option>
                </select>
                
                <label for="pdate">Date</label>
                <input type="date" id="pdate" name="cdate" value="<?php echo date('Y-m-d'); ?>" readonly style="background-color: #D5D8DC;">
                <input type="submit" value="Take Attendance">
            </form>
        </div>
    </body>
</html>