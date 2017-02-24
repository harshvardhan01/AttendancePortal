<?php
    session_start();
    include "../DBConnect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard: Student</title>
    </head>
    <body>
        <?php
            $cid= $_SESSION["cID"];
            $query= "select * from college where cid='$cid';";
            $result= $conn->query($query);
            $row= $result->fetch_assoc();
            $cname= $row['cname'];
            echo "<h1>$cname</h1><hr/>";
            
            $cuser= $_SESSION['currentUser'];
            $query= "select * from student where aemail='$cuser';";
            $result= $conn->query($query);
            $row= $result->fetch_assoc();
            $aname= $row['aname'];
            $ayear= $row['ayear'];
            $abranch= $row['abranch'];
            $abatch= $row['abatch'];
            $roll= $row['aroll_no'];
            $_SESSION["year"]= $ayear;
            $_SESSION["branch"]= $abranch;
            $_SESSION["batch"]= $abatch;
            $_SESSION["roll"]= $roll;
        ?>
        <table align="center" border="1px">
            <tr>
                <td>Name</td>
                <td><?php echo "$aname"; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo "$cuser"; ?></td>
            </tr>
            <tr>
                <td>Year</td>
                <td><?php echo "$ayear"; ?></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><?php echo "$abranch"; ?></td>
            </tr>
            <tr>
                <td>Batch</td>
                <td><?php echo "$abatch"; ?></td>
            </tr>
        </table>
        
        <?php include "SubjectList.php" ?>
    </body>
</html>