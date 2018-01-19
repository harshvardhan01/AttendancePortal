<?php
include "DBConfig.php";

error_reporting(0);

session_start();
if($_SESSION["currentUserEmail"])
{
    // session has been started
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

<!DOCTYPE html>
<html>
    <head>
        <title>Add Branch</title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <style>
            #sub, #subabbr, input[type=text]
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 15px;
            }
        </style>
        <script>
            var x = 0;;
            function checkPassword()
            {
                var xn = document.getElementById("anpassword").value;
                var xc = document.getElementById("ancpassword").value;
                if(xn.length == xc.length)
                {
                    if(xn == xc)
                    {
                        x = 1;
                        document.getElementById("s1").innerHTML = "Password matched";
                        document.getElementById("s1").style.color = "green";
                    }
                    else
                    {
                        x = 0;
                        document.getElementById("s1").innerHTML = "Please enter correct password";
                        document.getElementById("s1").style.color = "red";
                    }
                }
                else
                {
                    x = 0;
                    document.getElementById("s1").innerHTML = "Please enter correct password";
                    document.getElementById("s1").style.color = "red";
                }
            }
        </script>
    </head>
    
    <body>
        
        <?php
        $currentUserEmail = $_SESSION["currentUserEmail"];
        $sql = "select * from users where email = '$currentUserEmail';";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
        }
        ?>
        
        <div class="div-content">
            <h1 align="center">Change Password</h1>
            <label for="apassword">Password</label>
                <input type="password" id="apassword" name="fpassword">
                <span id="op" style="color:red"></span><br />
                
                <script>
                    function checkOriginalPassword()
                    {
                        var x = document.getElementById("apassword").value;
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() 
                        {
                            if (this.readyState == 4 && this.status == 200) 
                            {
                                document.getElementById("op").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "checkOPassword.php?pass=" + x, true);
                        xmlhttp.send();
                    }
                </script>
                
                <label for="apassword">New Password</label>
                <input type="password" id="anpassword" name="fnpassword" onselect="checkOriginalPassword();">
                
                <label for="apassword">Confirm Password</label>
                <input type="password" id="ancpassword" name="fncpassword" onkeyup="checkPassword();">
                <span id="s1"></span>
                
                <input type="submit" value="Change Password" onclick="change();">
            <h4 id="final" align="center"></h4>
        </div>
    </body>
</html>

<script>
    function change()
    {
        if(document.getElementById("op").innerHTML=="" && x == 1)
        {
            var p = document.getElementById("ancpassword").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("final").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "changePass.php?pass=" + p, true);
            xmlhttp.send();
        }
        else
        {
            document.getElementById("final").innerHTML = "Please fill all the details correctly";
        }
    }
</script>