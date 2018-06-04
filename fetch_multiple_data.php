<?php 

// connecting to database

$conn = mysql_connect("localhost","root","9016");
$db = mysql_select_db("sellus",$conn);

//fetching database
$query = "SELECT * from p_detail where category = 'electronics' limit 0,10";
$result = mysql_query($query) or die (mysql_error());
echo "<table border = '1px'>";
while($row = mysql_fetch_array($result))

{
	$id = $row[0];
	$p_brand = $row[1];
	$p_name = $row[2];
	$p_model = $row[3];
	$p_quantity = $row[4];
	$p_price= $row[5];
	$p_mdate= $row[6];
	$p_warranty= $row[7];
	$p_barcode= $row[8];
	
	echo "<tr>";
	echo "<td> {$id} </td>";
	echo "<td> {$p_brand} </td>";
	echo "<td> {$p_name} </td>";
	echo "<td> {$p_model} </td>";
	echo "<td> {$p_quantity} </td>";
	echo "<td> {$p_price} </td>";
	echo "<td> {$p_mdate} </td>";
	echo "<td> {$p_warranty} </td>";
	echo "<td> {$p_barcode} </td>";
	echo "</tr>";

}

echo "</table>";

?>