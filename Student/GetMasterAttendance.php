<?php
    include "DashboardStudent.php";

    $roll= $_SESSION["roll"];
    $query= "select * from collegesubjects where ayear='$ayear' and abranch='$abranch' and abatch='$abatch' and acollege_id='$cid';";

    $result= $conn->query($query);
    if($result->num_rows > 0)
    {
        echo "<table align='center' border='1px'>";
        echo "<tr><th>Subject</th><th>Total Classes</th><th>Total Present</th><th>Total Absent</th><th>Present%</th></tr>";
        while($row= $result->fetch_assoc())
        {
            $subject= $row['asubject'];
            echo "<tr>" . "<td>" . $subject . "</td>";
            
            $query= "select * from attendance where asubject='$subject';";
            $result1= $conn->query($query);
            $total_classes= $result1->num_rows;
            echo "<td>" . $total_classes . "</td>";
            if($result1->num_rows > 0)
            {
                $count= 0;
                while($row1= $result1->fetch_assoc())
                {
                    $id= $row1['aidentity'];
                    $query= "select `$id` from attendancedaterecord where aroll_no='$roll';";
                    $result2= $conn->query($query);
                    if($result2->num_rows > 0)
                    {
                        $row2= $result2->fetch_assoc();
                        if($row2["$id"] == "Absent")
                            $count++;
                    }
                }
            }
            $x= $total_classes - $count;
            echo "<td>" . $x . "</td>";
            echo "<td>" . $count . "</td>";
            if($total_classes != 0)
            {  
                $per= ($x * 100)/$total_classes;
            }
            else
                $per= 0.00;
            echo "<td>" . $per . "</td>";
            echo "<br />";
        }
        echo "<table>";
    }
?>