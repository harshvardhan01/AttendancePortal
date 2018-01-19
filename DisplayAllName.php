<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    if($_SESSION["currentUserCategory"] == "Administrator")
        include "adminLogin.php";
    else if($_SESSION["currentUserCategory"] == "Co-ordinator")
        include "coordinatorLogin.php";
    else if($_SESSION["currentUserCategory"] == "Faculty")
        include "facultyLogin.php";
}
else
{
    session_destroy();
    header("Location: index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <style>
            tr:nth-child(odd)
            {
                background: #ECF0F1;
            }
            tr:nth-child(even)
            {
                background: #F8F9F9;
            }
            a{
                text-decoration: none;
                color: cornflowerblue;
            }
            p{
                color: cadetblue;
            }
            input[type="checkbox"]
            {
                width: 15px; /*Desired width*/
                height: 15px; /*Desired height*/
            }
        </style>
        <script>
            function toggle(source) {
                checkboxes = document.getElementsByName('check_list[]');
                for(var i=0, n=checkboxes.length;i<n;i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
    </head>

<?php
    $id = $_SESSION['attendance_identity'];
    $sem = $_SESSION['sem'];
    $branch = $_SESSION['branch'];
    $batch = $_SESSION['batch'];

    include 'DBConfig.php';
    $sem = "" + $_SESSION['sem'] . "sem";
    
    $sql = "SELECT * from $sem where `branch`='$branch' and `branch`='$branch' and `batch`='$batch';";
    $result = $conn->query($sql);
?>
    <body>
        <p style="font-size:34px" align="center">
            <span style="float:left"><?php echo "Branch: " . $branch;?></span>
            <span style="float:right;"><?php echo "Semester: " . $sem;?></span>
            <?php echo "Batch: " . $batch; ?>
        </p>
        <p style="color:orange">
            <span style="color:#16A085">Instructions<br />
            &nbsp;&nbsp;&nbsp;&nbsp;- Attendance marked once can not be changed.</span><br />
            <span style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;- Check checkbox to mark absent.</span>
        </p>
        <span style="float:right; font-size: 20px; margin: 0% 20px 20px 0px;"><input type="checkbox" onClick="toggle(this)" /> Check/ Uncheck All<br/></span>
        <form method="post" action="displayname.php">
            <input type="checkbox" name="check_list[]" value="0" checked hidden>
            <table cellpadding="10" align="center" width="100%">
                <tr style="background-color: #D0D3D4">
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Absent</th>
                </tr>
                <?php
                    while($row = $result->fetch_assoc())
                    {
                        $name = $row['name'];
                        $roll = $row['roll'];
                ?>
                    <tr>
                        <td align="center"><?php echo $roll; ?></td>
                        <td align="center"><?php echo $name; ?></td>
                        <td align="center"><input type="checkbox" name="check_list[]" value="<?php echo $roll; ?>"></td>
                    </tr>
                <?php
                    }
                ?>
                <tr>
                    <td align="center" colspan="3"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
