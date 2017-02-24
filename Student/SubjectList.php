<?php
    include "../DBConnect.php";
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $cid= $_SESSION["cID"];
            $ayear= $_SESSION["year"];
            $abranch= $_SESSION["branch"];
            $abatch= $_SESSION["batch"];
            $query= "select * from collegesubjects where acollege_id='$cid' and ayear='$ayear' and abranch='$abranch' and abatch='$abatch';";
            $result= $conn->query($query);
            if ($result->num_rows > 0)
            {
                echo "<table border='1px' cellpadding='20px'>";
                echo "<tr>";
                echo "<td><a href= 'GetMasterAttendance.php'>Master</a></td>";
                while($row= $result->fetch_assoc())
                {
                    $subject= $row['asubject'];
                    echo "<td><a href= 'GetAttendance.php?sub=$subject'>" . $subject . "</a></td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        ?>
    </body>
</html>