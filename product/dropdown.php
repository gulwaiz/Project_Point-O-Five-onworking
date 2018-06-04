<?php

mysql_connect('localhost','root','9016');
mysql_select_db('sellus');
$sql="select p_brand from p_detail where email='$email'";
$result=mysql_query($sql);







//echo"<select name='p_detail' >";
while($row=mysql_fetch_array($result)){
	
	
echo"<option value='".$row['p_brand']."'>".$row['p_brand']."</option>";



} 
echo"</select>";


?>
<html>
<head><title></title></head>


</html>