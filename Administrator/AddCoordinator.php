<?php
    include "../DBConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Coordinator</title>
    </head>
    
    <body>
        <?php include "DashboardAdministrator.php" ?>
        <form method="post">
            <table align="center" border="1px" cellpadding="10px">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="uname" required /></td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td>
                        <select name="ubranch" required>
                            <option value="">--Select--</option>
                            <?php
                                $cid= $_SESSION["cID"];
                                $query= "select distinct abranch from collegesubjects where acollege_id='$cid';";
                                $result= $conn->query($query);
                                while($row= $result->fetch_assoc())
                                {
                                    $val= $row["abranch"];
                                    echo "<option value='$val'>$val</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="uemail" required /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="uphone" required /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Add Co-ordinator" required /></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname= $_POST["uname"];
        $ubranch= $_POST["ubranch"];
        $uemail= $_POST["uemail"];
        $uphone= $_POST["uphone"];
        $cid= $_SESSION["cID"];
        
        $query= "insert into coordinator(aname, aemail, aphone, apassword, abranch, acollege_id) values ('$uname', '$uemail', '$uphone', 'coordinator', '$ubranch', '$cid');";
            
        if (mysqli_query($conn, $query))
        {
            echo "New record created successfully";
        }
        else 
        {
            echo "Coordinator already available";
        }
    }
?>