<?php
    session_start();
if(!$_SESSION["currentUserEmail"])
{
    session_destroy();
    header("Location: index.php");
}
    $branch = $_POST['abranch'];
    $sem = $_POST['asem'];
    $batch = $_POST['abatch'];
    
    $_SESSION['ayear'] = $year;
    $branch = $_SESSION['abranch'] = $branch;
    $sem = $_SESSION['asem'] = $sem;
    $_SESSION['abatch'] = $batch;

    header("Location: GetAttendance.php");
?>