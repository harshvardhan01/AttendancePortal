<?php
    $branch = $_GET["branch"];
    $sem = $_GET["sem"];
?>
<?php
if($sem == 1 || $sem == 2)
{
    echo "<option value='' disabled selected>- - Select Batch - -</option>";
    echo "<option value='1'>A</option>";
    echo "<option value='2'>B</option>";
    echo "<option value='3'>C</option>";
    echo "<option value='4'>D</option>";
    echo "<option value='5'>E</option>";
    echo "<option value='6'>F</option>";
    echo "<option value='7'>G</option>";
    echo "<option value='8'>H</option>";
}
else if($branch == "CSE")
{
    if(($sem == 3) || ($sem == 4))
    {
        echo "<option value='' disabled selected>- - Select Batch - -</option>";
        echo "<option value='1'>IBM</option>";
        echo "<option value='2'>Non IBM</option>";
    }
    else
    {
        echo "<option value='0'>None</option>";
    }
}

else
{
    echo "<option value='0'>None</option>";
}
?>