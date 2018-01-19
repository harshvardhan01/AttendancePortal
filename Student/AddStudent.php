<?php
include "../DBConfig.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Take Attendance</title>
        <link rel="stylesheet" type="text/css" href="../css/form.css">
        <script>
            function getBatch()
            {
                var branch = document.getElementById("b").value;
                var sem = document.getElementById("x").value;
                sem = sem * 2;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("batchSelect").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "../getBatch.php?branch=" + branch + "&sem=" + sem, true);
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
            <h1 align="center">Add Student</h1>
            <form action="attendance.php" method="post">
                <label for="proll">Roll No.</label>
                <input type="text" id="proll" name="sroll">

                <label for="pname">Name</label>
                <input type="text" id="pname" name="sname">

                <label for="s">Phone</label>
                <input type="text" id="s" name="sphone">

                <label for="pemail">Email</label>
                <input type="email" id="pemail" name="semail">

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

                <label for="x">Year</label>
                <select name="sem" onchange="getBatch();" id="x">
                    <option value="" diabled selected>- - Select Year - -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                    
                <label for="batchSelect">Batch</label>
                <select id="batchSelect" name="batch" required>
                    <option value="" disabled selected>- - Select Batch - -</option>
                </select>
                
                <input type="submit" value="Add Student">
            </form>
        </div>
    </body>
</html>