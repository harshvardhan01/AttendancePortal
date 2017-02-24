<?php
    include "DashboardStudent.php";
    $subject= $_GET['sub'];
    echo "<h5>$subject</h5>";
    $query= "select * from attendance where ayear='$ayear' and abranch='$abranch' and abatch='$abatch' and asubject='$subject' and acollege_id='$cid';";
    $result= $conn->query($query);
    if($result->num_rows > 0)
    {
        echo "<table border='1px' align='center'>";
        echo "<tr><th>Date</th><th>Attendance</th></tr>";
        while($row= $result->fetch_assoc())
        {
            $date= $row['adate'];
            $id= $row['aidentity'];
            $roll= $_SESSION['roll'];
            $query1= "select * from attendancedaterecord where aroll_no='$roll';";
            $result1= $conn->query($query1);
            $row1= $result1->fetch_assoc();
            $att= $row1["$id"];
            echo "<tr><td>$date</td><td>$att</td><tr>";
        }
        echo "</table>";
    }
?>