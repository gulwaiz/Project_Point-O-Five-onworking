<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);



mysql_connect('localhost','root','');
mysql_select_db('student_details');

/*$con = mysql_connect('localhost','root','','student_details');
if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}*/

//mysql_select_db($con);
$sql="SELECT * FROM student WHERE id = '".$q."'";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Class</th>
<th>mark</th>

</tr>";

if($result === false){
    die("data not received");
}

while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['class'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
   // echo "<td>" . $row['Hometown'] . "</td>";
    //echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
//mysqli_close($con);
?>
</body>
</html>