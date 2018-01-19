<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
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
        $bname = $_POST['bname'];
        $baname = $_POST['baname'];
        $sql = "INSERT INTO branches(`branchname`,`abbr`) VALUES ('$bname' , '$baname');";
        if($conn->query($sql))
        {
            $msg = "Branch Added " . $baname;
            $auser = $_SESSION["currentUserEmail"];
            $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
            $conn->query($sql);
            
            header("Location: ViewBranches.php");
        }
        else
        {
            echo "This branch is already added. If you still feel an error has occurred, please contact Admin";
        }
    }
?>