<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    
}
else
{
    session_destroy();
    header("Location: index.php");
}

$subject = $_GET["sub"];
$branch = $_SESSION["abranch"];
$sem = $_SESSION["asem"];
$batch = $_SESSION["abatch"];

?>
<html>
    <body>
        <table id="keywords" cellpadding="10" align="center" width="100%">
            <tr style="background-color: #D0D3D4">
                <th>University Roll No.</th>
                <th>Name</th>
                <?php
                $sql = "SELECT * from attendanceidentify where `branch`='$branch' and `sem`='$sem' and `subject`='$subject' and `batch`='$batch';";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                        <th><?php echo $row["date"]; ?></th>
                <?php    
                    }
                }
                ?>
                <th>Present %</th>
            </tr>
            
            <?php
            
            $rollarray = array();
            $namearray = array();
            $asem = $sem . "sem";
            
            $sql = "SELECT * from $asem where `branch`='$branch' and `batch`='$batch';";
            $result = $conn->query($sql);
            
            $countstudents = 0;
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $name = $row["name"];
                    $roll = $row["roll"];
                    array_push($rollarray, $roll);
                    array_push($namearray, $name);
                    $countstudents++;
                }
            }

            for($i=0; $i<$countstudents; $i++)
            {
                ?>
            <tr>
                <td align="center"><?php echo $rollarray[$i]; ?></td>
                <td align="center"><?php echo $namearray[$i]; ?></td>
                
                <?php
                $sql = "SELECT * from `attendanceidentify` where `branch`='$branch' and `sem`=$sem and `batch`=$batch and `subject`='$subject';";
                $result = $conn->query($sql);
                $total_present = 0;
                $total_classes = 1;
                if($result->num_rows > 0)
                {
                    $total_classes = $result->num_rows;
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["id"];
                        $sql1 = "SELECT * from $asem where `roll`='$rollarray[$i]';";                                   $result1 = $conn->query($sql1);
                        if($result1->num_rows > 0)
                        {
                            while($row1 = $result1->fetch_assoc())
                            {
                                $att = $row1["$id"];
                                if($att == "P")
                                {
                                ?>
                                <td align='center' style="color:green">P</td>
                                <?php
                                }
                                else
                                {
                ?>
                                <td align='center' style="color:red">A</td>
                                <?php
                                }
                                if($att == "P")
                                    $total_present++;
                            }
                        }

                    }
                }
                $attq = round(($total_present * 100.0)/($total_classes*1.00),2);
                if($attq < 75.00)
                {
                    ?>
                <td align='center' style='background:#E74C3C'><?php echo $attq; ?></td>
                <?php
                }
                else
                {
                ?>
                <td align='center'><?php echo $attq; ?></td>
                <?php
                }
                ?>
            </tr>
            <?php
            }
        ?>
        </table>
    </body>
</html>
