<!DOCTYPE html>
<html>
<body>

<?php
    require_once './dbconnect.php';

    // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($DBcon,"SELECT * FROM student");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['dept_name'] . "</td>";
echo "</tr>";
}
echo "</table>";

$DBcon->close();
?>

<br>

<form id="frm1" action="./process_input.php" method="post">
  ID: <input type="text" name="ID"><br>
  Name: <input type="text" name="Name"><br><br>
  Dept_name: <input type="text" name="Dept_name"><br><br>
  <button type = 'submit'> Submit </button>
</form>

</body>
</html>

