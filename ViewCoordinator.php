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
                <th>Coordinator Name</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        <?php
            $sql = "SELECT * from coordinator;";
            $result = $conn->query($sql);
        
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $name = $row["name"];
                    $branch = $row["branch"];
                    $email = $row["email"];
                    $phone = $row["phone"];
            ?>
            <tr>
                <td align="center"><?php echo $name; ?></td>
                <td align="center"><?php echo $branch; ?></td>
                <td align="center"><?php echo $email; ?></td>
                <td align="center"><?php echo $phone; ?></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>
        <input type="submit" value="Add Coordinator" style="margin-top: 5%" onclick="addBranch();">
    </body>
    <script>
        function addBranch()
        {
            window.location.href = "AddCoordinator.php";
        }
    </script>
</html>
