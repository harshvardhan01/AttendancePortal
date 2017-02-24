<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    
    <body>
        <form method="post">
            <table align="center" border="1px" cellpadding="10px">
                <tr>
                    <td>User name</td>
                    <td><input type="text" name="uname" required /></td>
                </tr>
                <tr>
                    <td>Login Type</td>
                    <td>
                        <select name="ulogin" required>
                            <option value="">--Select--</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Coordinator">Co-ordinator</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Student">Student</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="upass" required /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login" required /></td>
                </tr>
                <tr>
                    <td colspan="2"><p id="msg"></p></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include "DBConnect.php";
        $uname= $_POST["uname"];
        $ulogin= $_POST["ulogin"];
        $upass= $_POST["upass"];
        
        if($ulogin == "Administrator")
        {
            $query= "select * from Administrator where aemail='$uname' and apassword='$upass'";
            $result= $conn->query($query);
            if($result->num_rows > 0)
            {
                $row= $result->fetch_assoc();
                $currentUser= $row["aname"];
                $cid= $row["acollege_id"];
                $_SESSION["currentUser"]= "$currentUser";
                $_SESSION["cID"]= "$cid";
                header('Location: Administrator/DashboardAdministrator.php');
            }
            else
                echo "<script>document.getElementById('msg').innerHTML= 'Invalid username/ password';</script>";
        }
        
        else if($ulogin == "Coordinator")
        {
            $query= "select * from Coordinator where aemail='$uname' and apassword='$upass'";
            $result= $conn->query($query);
            if($result->num_rows > 0)
            {
                $row= $result->fetch_assoc();
                $currentUser= $row["aname"];
                $cid= $row["acollege_id"];
                $_SESSION["currentUser"]= "$currentUser";
                $_SESSION["cID"]= "$cid";
                header('Location: Coordinator/DashboardCoordinator.php');
            }
            else
                echo "<script>document.getElementById('msg').innerHTML= 'Invalid username/ password';</script>";
        }
        
        else if($ulogin == "Faculty")
        {
            $query= "select * from Coordinator where aemail='$uname' and apassword='$upass'";
            $result= $conn->query($query);
            if($result->num_rows > 0)
            {
                $row= $result->fetch_assoc();
                $currentUser= $row["aname"];
                $cid= $row["acollege_id"];
                $_SESSION["currentUser"]= "$currentUser";
                $_SESSION["cID"]= "$cid";
                header('Location: Faculty/DashboardFaculty.php');
            }
            else
                echo "<script>document.getElementById('msg').innerHTML= 'Invalid username/ password';</script>";
        }
        
        else
        {
            $query= "select * from Student where aemail='$uname' and apassword='$upass'";
            $result= $conn->query($query);
            if($result->num_rows > 0)
            {
                $row= $result->fetch_assoc();
                $currentUser= $row["aemail"];
                $cid= $row["acollege_id"];
                $_SESSION["currentUser"]= "$currentUser";
                $_SESSION["cID"]= "$cid";
                header('Location: Student/GetMasterAttendance.php');
            }
            else
                echo "<script>document.getElementById('msg').innerHTML= 'Invalid username/ password';</script>";
        }
        
    }

?>