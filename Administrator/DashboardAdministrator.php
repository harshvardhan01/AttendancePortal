<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard: Administrator</title>
    </head>
    <body>
        <?php
            echo "Welcome " . $_SESSION["currentUser"];
        ?>
        <ul>
            <li><a href="DashboardAdministrator.php">Home</a></li>
            <li><a href="AddCoordinator.php">Add Co-ordinator</a></li>
            <li><a href="ViewCoordinator.php">View Co-ordinator</a></li>
            <li><a href="ViewFaculty.php">View Faculty</a></li>
            <li><a href="ViewStudentAttendance.php">View Student Attendance</a></li>
        </ul>
    </body>
</html>