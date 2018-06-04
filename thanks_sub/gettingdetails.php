<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px sotdd black;
    padding: 5px;
}

th {text-atdgn: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);



mysql_connect('localhost','root','9016');
mysql_select_db('sellus');

/*$con = mysql_connect('localhost','root','','student_details');
if (!$con) {
    die('Could not connect: ' . mysql_error($con));
}*/

//mysql_select_db($con);
$sql="SELECT * FROM p_detail WHERE id = '".$q."'";
$result = mysql_query($sql);

echo "<table>
<tr>
<td>product brand</td>
<td>product name</td>
<td>product model</td>
<td>product quantity</td>
<td>product price</td>
<td>manufacture date</td>
<td>warranty</td>
<td>Bar code</td>


</tr>";

if($result === false){
    die("data not received");
}

while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['p_brand'] . "</td>";
    echo "<td>" . $row['p_name'] . "</td>" ;
    echo "<td>" . $row['p_model'] . "</td>";
    echo "<td>" . $row['p_quantity'] . "</td>";
    echo "<td>" . $row['p_price'] . "</td>";
    echo "<td>" . $row['p_mdate'] . "</td>";
    echo "<td>" . $row['p_warranty'] . "</td>";
    echo "<td>" . $row['p_barcode'] . "</td>";
   // echo "<td>" . $row['Hometown'] . "</td>";
    //echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
//mysqli_close($con);
?>

</body>
</html>