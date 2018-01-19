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
        $coemail = $_POST['coemail'];
        $sql = "SELECT * from `user` where `email`='$coemail'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $phone = $row["phone"];
        $sql = "INSERT INTO coordinator(`name`,`branch`,`email`,`phone`) VALUES ('$name' , '$bname' , '$coemail', '$phone');";
        if($conn->query($sql))
        {
            $sql = "UPDATE `user` SET `category`='Coordinator' WHERE `email`='$coemail';";
            $conn->query($sql);
            
            $msg = "Coordinator Added " . $coemail;
            $auser = $_SESSION["currentUserEmail"];
            $sql = "INSERT INTO `logfile` (`activity`, `user`) VALUES ('$msg', '$auser')";
            $conn->query($sql);
            
            header("Location: ViewCoordinator.php");
        }
        else
        {
            echo "The coordinator for this branch is already added. If you still feel an error has occurred, please contact Admin";
        }

    }
?>