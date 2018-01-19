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
    </head>

<?php
    include 'DBConfig.php';
?>
    <body>
        <p style="font-size:34px" align="center">
            <span style="float:left"><?php echo "Branch: " . $_POST["abranch"];?></span>
            <span style="float:right; font-size:20px"><a href="ViewSubjectInfo.php">View Another Branch's subjects</a></span>
            <?php echo "Semester: " . $_POST["asem"]; ?>
        </p>
        <table cellpadding="10" align="center" width="100%" style="margin-top: 5%">
            <tr style="background-color: #D0D3D4">
                <th>Subject Name</th>
                <th>Subject Abbreviation</th>
            </tr>
        <?php
            $abranch = $_POST["abranch"];
            $asem = $_POST["asem"];
            $sql = "SELECT * from subjectlist where `branch`='$abranch' and `sem`='$asem';";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $subject = $row["subjectname"];
                    $abbr = $row["subjectabbr"];
            ?>
            <tr>
                <td align="center"><?php echo $subject; ?></td>
                <td align="center"><?php echo $abbr; ?></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>
        <input type="submit" value="Add Subject" style="margin-top: 5%" onclick="addSubject();">
    </body>
    <script>
        function addSubject()
        {
            window.location.href = "AddSubject.php";
        }
    </script>
</html>
