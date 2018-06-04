
<?php

function connect() {
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "9016";
	$dbname = "sellus";
	
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}

?>