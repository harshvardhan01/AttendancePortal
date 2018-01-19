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
        $fsem = $_POST['fsem'];
        $femail = $_POST['femail'];
        $fbranch = $_POST['fbranch'];
        $fbatch = $_POST['fbatch'];
        $fsubject = $_POST['fsubject'];
        
        $sql = "SELECT * from `user` where `email`='$femail'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        $name = $row["name"];
        $phone = $row["phone"];
        
        $sql = "INSERT INTO faculty(`name`,`email`,`phone`,`branch`,`semester`,`batch`,`subject`) VALUES ('$name' , '$femail' , '$phone', '$fbranch', '$fsem', '$fbatch', '$fsubject');";
        if($conn->query($sql))
        {
            $msg = "Subject" . $fsubject . " sem " . $fsem . " branch " . $fbranch . "assigned to " . $femail;
            $auser = $_SESSION["currentUserEmail"];
            $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
            $conn->query($sql);
            
            echo "Subject Assigned";
        }
        else
        {
            echo "Faculty already added. If you still feel an error has occurred, please contact Admin";
        }

    }
?>