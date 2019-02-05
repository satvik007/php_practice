<!DOCTYPE html>
<html>
<body>


<?php 
    require_once './dbconnect.php'; 
    $name = $_POST["Name"];
    $roll = $_POST["ID"];
    $department = $_POST["Dept_name"];

    mysqli_query($DBcon,"INSERT INTO student (ID, name, dept_name) VALUES ('$roll', '$name', '$department')");

    $DBcon->close();
?>

<script type="text/javascript">location.href = './index.php';</script>


</body>
</html>


