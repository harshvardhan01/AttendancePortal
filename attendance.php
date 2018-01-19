
<?php
    include "DBConfig.php";
    session_start();
if(!$_SESSION["currentUserEmail"])
{
    session_destroy();
    header("Location: index.php");
}

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $branch = $_POST['branch'];
        $sem = $_POST['sem'];
        if($sem == 1 || $sem == 2)
        {
            $branch = 'CSE';
        }
        $batch = $_POST['batch'];
        $subject = $_POST['subject'];
        $cdate = $_POST['cdate'];
        $_SESSION["branch"] = $branch;
        $_SESSION["sem"] = $sem;
        $_SESSION["batch"] = $batch;
        $_SESSION["subject"] = $subject;
        $_SESSION["cdate"] = $cdate;
        header("Location: DisplayAllName.php");
    }
?>