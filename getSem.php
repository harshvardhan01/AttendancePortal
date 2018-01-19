<?php
session_start();
if(!$_SESSION["currentUserEmail"])
{
    session_destroy();
    header("Location: index.php");
}

    $year = $_GET["y"];
    echo "<option value=''>--Select--</option>";
    if($year == '1')
    {
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
    }
    else if($year == '2')
    {
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
    }
    else if($year == '3')
    {
        echo "<option value='5'>5</option>";
        echo "<option value='6'>6</option>";
    }
    else if($year == '4')
    {
        echo "<option value='7'>7</option>";
        echo "<option value='8'>8</option>";
    }
?>