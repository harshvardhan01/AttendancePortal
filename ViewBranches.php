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
        <table cellpadding="10" align="center" width="100%" style="margin-top: 5%">
            <tr style="background-color: #D0D3D4">
                <th>Branch Name</th>
                <th>Branch Abbreviation</th>
            </tr>
        <?php
            $sql = "SELECT * from branches;";
            $result = $conn->query($sql);
        
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $branch = $row["branchname"];
                    $abbr = $row["abbr"];
            ?>
            <tr>
                <td align="center"><?php echo $branch; ?></td>
                <td align="center"><?php echo $abbr; ?></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>
        <input type="submit" value="Add Branch" style="margin-top: 5%" onclick="addBranch();">
    </body>
    <script>
        function addBranch()
        {
            window.location.href = "AddBranch.php";
        }
    </script>
</html>
