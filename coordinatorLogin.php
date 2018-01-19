<?php
    session_start();
    if(!$_SESSION['currentUserEmail'])
    {
        session_destroy();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Portal</title>
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
    </head>
    <body>
        <ul>
            <li class="dropdown">
                <a href="Home.php" class="dropbtn">Home</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Faculty</a>
                <div class="dropdown-content">
                    <a href="AddFaculty.php">Add Faculty</a>
                    <a href="ViewFaculty.php">View Faculty</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Student</a>
                <div class="dropdown-content">
                    <a href="ShowAttendance.php">View Attendance</a>
                    <a href="TakeAttendance.php">Take Attendance</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Miscellaneous</a>
                <div class="dropdown-content">
                    <a href="ViewSubjectInfo.php">View Subjects</a>
                </div>
            </li>
            <li class="dropdown" style="float:right">
                <a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION["currentUserName"] ?></a>
                <div class="dropdown-content">
                    <a href="changePassword.php">Change Password</a>
                    <a href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </body>
</html>