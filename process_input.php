<!DOCTYPE html>
<html>
<body>

    <?php 
        require_once './dbconnect.php'; 
    ?>

    Welcome <?php echo $_POST["Name"]; ?><br>
    Your id is: <?php echo $_POST["ID"]; ?>

    

<body>
</html>