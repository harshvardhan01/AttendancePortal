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
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $slist = $_POST['slist'];
        $sem = $_POST['sem'];
        $sname = $_POST['sname'];
        $saname = $_POST['saname'];
        $sql = "INSERT INTO subjectlist(`branch`,`sem`,`subjectname`, `subjectabbr`) VALUES ('$slist' , '$sem', '$sname', '$saname');";
        if($conn->query($sql))
        {
            $msg = "Subject Added " . $sname;
            $auser = $_SESSION["currentUserEmail"];
            $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
            $conn->query($sql);
            
            echo "Subject added successfully";
        }
        else
            echo "Error";
    }
?>