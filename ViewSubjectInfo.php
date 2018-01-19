<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    // session has been started
        if($_SESSION["currentUserCategory"] == "Administrator")
            include "adminLogin.php";
        else if($_SESSION["currentUserCategory"] == "Co-ordinator")
            include "coordinatorLogin.php";
}
else
{
    session_destroy();
    header("Location: index.php");
}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/form.css">
    </head>
    
    <body>
        
        <div class="div-content">
            <form action="ViewSubjects.php" method="post">
                <label for="branchSelect">Branch</label>
                <select id="branchSelect" name="abranch" required>
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
                
                <label for="semSelect">Semester</label>
                <select id="semSelect" name="asem" onchange="getBatch();" required >
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
                <input type="submit" value="View Subjects">
            </form>
        </div>
    </body>
</html>
