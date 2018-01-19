<?php
include "DBConfig.php";
session_start();
if(!$_SESSION["currentUserEmail"])
{
    session_destroy();
    header("Location: index.php");
}

?>

<?php
    $branch = $_GET["q"];
    $sem = $_GET["p"];
    $sql = "SELECT * from `subjectlist` where `sem`='$sem' and `branch`='$branch';";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo $result->num_rows;
        ?>
<option value="" disabled selected>- - Select Subject - -</option>
<?php
        while($row = $result->fetch_assoc())
        {
            $subjectname = $row["subjectname"];
            $subjectabbr = $row["subjectabbr"];
?>
        <option value='<?php echo $subjectabbr; ?>'><?php echo $subjectname;?></option>
<?php
        }
    }
?>