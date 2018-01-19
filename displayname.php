<?php
    session_start();
    include 'DBConfig.php';
    if(!$_SESSION["currentUserEmail"])
    {
        session_destroy();
        header("Location: index.php");
    }

    $branch = $_SESSION['branch'];
    $sem = $_SESSION['sem'];
    $batch = $_SESSION['batch'];
    $subject = $_SESSION['subject'];
    $cdate = $_SESSION['cdate'];
    $sql = "INSERT INTO attendanceidentify(`branch`, `sem`, `batch`, `subject`, `date`) VALUES ('$branch', '$sem', '$batch', '$subject', '$cdate');";
    if($conn->query($sql))
    {
        $last_id = $conn->insert_id;
        $_SESSION['attendance_identity'] = $last_id;
        $_SESSION['sem'] = $sem;
        $_SESSION['branch'] = $branch;
        $_SESSION['batch'] = $batch;
            
        $msg = "Attendance taken. Subject " . $subject . " date " . $cdate . " sem " . $sem . " batch " . $batch;
        $auser = $_SESSION["currentUserEmail"];
        $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
        $conn->query($sql);
    }


    $id = $_SESSION['attendance_identity'];
    $sem = $_SESSION['sem'];
    $branch = $_SESSION['branch'];
    $batch = $_SESSION['batch'];

    $sem = "" + $_SESSION['sem'] . "sem";

    $sql = "ALTER TABLE `$sem` ADD `$id` VARCHAR(2) NOT NULL DEFAULT 'P';";
    if($conn->query($sql))
    {
        header("Location: TakeAttendance.php");
    }
    else
        echo $conn->error;
    
    foreach($_POST['check_list'] as $check) 
    {
        $sql = "UPDATE `$sem` SET `$id` = 'A' WHERE `$sem`.`roll` = '$check';";
        $conn->query($sql);
    }
?>