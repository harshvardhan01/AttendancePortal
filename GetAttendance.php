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
        <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
        
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
            #myInput {
                background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                background-position: 10px 12px; /* Position the search icon */
                background-repeat: no-repeat; /* Do not repeat the icon image */
                width: 100%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 40px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
            }
            #showAttendance {
              overflow: hidden;
              overflow-x: auto;
              clear: both;
              width: 100%;
            }

            #keywords {
              min-width: rem-calc(640);
            }
        </style>
        
        <script>
            function showSubjectAttendance(a)
            {
                document.getElementById("myInput").value="";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("showAttendance").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getsubjectattendance.php?sub=" + a, true);
                xmlhttp.send();
            }
        </script>
    </head>
    
    <?php
    $branch = $_SESSION['abranch'];
    $sem = $_SESSION['asem'];
    $batch = $_SESSION['abatch'];
    
    $sql = "SELECT * from subjectlist where `branch`='$branch' and `sem`='$sem';";
    $result = $conn->query($sql);
    
    $subarray = array();
    $count = 0;
        
    if($result->num_rows > 0)
    {?>
    
    <body>
        <p style="font-size:34px" align="center">
            <span style="float:left"><?php echo "Branch: " . $branch;?></span>
            <span style="float:right; font-size:20px"><a href="ShowAttendance.php">View Another Attendance</a></span>
            <?php echo "Semester: " . $sem; ?>
        </p>
        <ul style="background-color: #b30086; margin: 20px 0px 50px 0px;">
            <li class="dropdown">
                <a href="" class="dropbtn">Mater</a>
            </li>
            
            <?php
        
        while($row = $result->fetch_assoc())
        {
            $sub = $row["subjectname"];
            $suba = $row["subjectabbr"];
            array_push($subarray, $suba);
            $count++;
            ?>
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" onclick="showSubjectAttendance('<?php echo $suba; ?>');"><?php echo $sub . "  (" . $suba . ")" ;?></a>
            </li>
            
            <?php
        }
    }
    
    $_SESSION['abranch'] = $branch;
    $_SESSION['asem'] = $sem;
    $_SESSION['abatch'] = $batch;
            ?>
        
        </ul>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
        <div id="showAttendance">
            
            
            <script>
                function myFunction() {
                    // Declare variables 
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("keywords");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        }else {
                            tr[i].style.display = "none";
                      }
                    } 
                  }
                }
            </script>
            
            <table id="keywords" cellpadding="10" align="center" width="100%">
                <thead>
                <tr style="background-color: #D0D3D4">
                    <th>University Roll No.</th>
                    <th>Name</th>
                    
                    <?php
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $sub = $row["subjectname"];
                            $suba = $row["subjectabbr"];
                    ?>
                    
                    <th><?php echo $suba; ?></th>
                    
                    <?php
                        }
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
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
                ?>
                
                <?php
                for($i=0; $i<$countstudents; $i++){
                    ?>
                <tr>
                <td align="center" class="lalign"><?php echo $rollarray[$i]; ?></td>
                <td align="center"><?php echo $namearray[$i]; ?></td>
                    <?php
                    for($j=0; $j<$count; $j++)
                    {
                        $sql = "SELECT * from `attendanceidentify` where `branch`='$branch' and `sem`=$sem and `batch`=$batch and `subject`='$subarray[$j]';";
                        $result = $conn->query($sql);
                        $total_present = 0;
                        $total_classes = 1;
                        if($result->num_rows > 0)
                        {
                            $total_classes = $result->num_rows;
                            while($row = $result->fetch_assoc())
                            {
                                $id = $row["id"];
                                $sql1 = "SELECT * from $asem where `roll`='$rollarray[$i]';";
                                $result1 = $conn->query($sql1);

                                if($result1->num_rows > 0)
                                {
                                    while($row1 = $result1->fetch_assoc())
                                    {
                                        $att = $row1["$id"];
                                        if($att == "P")
                                            $total_present++;
                                    }
                                }
                            }
                        }
                        $att = round((($total_present * 100.0)/($total_classes*1.00)),2);
                        if($att<75.00)
                        {
                            ?>
                            <td align='center' style='background:#E74C3C'><?php echo $att; ?></td>
                    <?php
                        }
                        else
                        {
                            ?>
                            <td align='center'><?php echo $att; ?></td>

            <?php
                        }
                    }
                    ?>
                    </tr>
                    <?php
                }
            ?>
                    </tbody>
            </table>
        </div>
        
        <script type="text/javascript">
        $(function(){
            $('#keywords').tablesorter(); 
        });
        </script>
    </body>
</html>