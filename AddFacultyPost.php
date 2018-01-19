<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
    else if($_SESSION["currentUserCategory"] == "Coordinator")
        include "coordinatorLogin.php";
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
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fphone = $_POST['fphone'];
        $pass = md5("new.faculty");
        $sql = "INSERT INTO `user`(`name`, `email`, `phone`, `password`, `category`) VALUES ('$fname' , '$femail' , '$fphone', '$pass', 'Faculty');";
        if($conn->query($sql))
        {
            
            $msg = "Faculty Added " . $femail;
            $auser = $_SESSION["currentUserEmail"];
            $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
            $conn->query($sql);
            
            echo "New Faculty Added! Password for new faculty: new.faculty";
        }
        else
        {
            echo "The faculty with above details is already added. If you still feel an error has occurred, please contact Admin";
        }

    }
?>