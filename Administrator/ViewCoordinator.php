<?php
    include "../DBConnect.php";
    include "DashboardAdministrator.php";
    
    $query= "select * from coordinator;";
    $result= $conn->query($query);
    if($result->num_rows > 0)
    {
        echo "<table align='center' border='1px'>";
        echo "<tr><th>Name</th><th>Branch</th><th>Email</th><th>Phone</th></tr>";
        while($row=$result->fetch_assoc())
        {
            $aname= $row['aname'];
            $aemail= $row['aemail'];
            $aphone= $row['aphone'];
            $abranch= $row['abranch'];
            echo "<tr>" . "<td>" . $aname . "</td>" . "<td>" . $abranch . "</td>" . "<td>" . $aemail . "</td>" . "<td>" . $aphone . "</td>" . "<td><button id='$aemail'>Modify</button></td>" . "<td><button id='$aemail'>Remove</button></td>" . "</tr>";
        }
        echo "<table>";
    }
    
?>