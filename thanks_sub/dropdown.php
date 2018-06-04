

<html>
<head><title></title></head>

<body>




<?php

mysql_connect('localhost','root','9016');
mysql_select_db('sey');
$sql="select p_brand , id from p_detail where email='$email'";
$result = mysql_query($sql);







//echo"<select name='p_detail' >";
while($row = mysql_fetch_array($result)){
	
	
echo"<option value='".$row['id']."'>".$row['p_brand']."</option>";



} 
echo"</select>";


?>

</body>

</html>