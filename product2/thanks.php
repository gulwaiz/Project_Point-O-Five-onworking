<?php

session_start();

require 'connection.php';
$conn        = connect();
$p_brand     = $conn->real_escape_string($_POST['p_brand']);
$p_name      = $conn->real_escape_string($_POST['p_name']);
$p_model     = $conn->real_escape_string($_POST['p_model']);
$p_quantity  = $conn->real_escape_string($_POST['p_quantity']);
$p_price     = $conn->real_escape_string($_POST['p_price']);
$p_mdate     = $conn->real_escape_string($_POST['p_mdate']);
$p_warranty  = $conn->real_escape_string($_POST['p_warranty']);
$p_barcode   = $conn->real_escape_string($_POST['p_barcode']);
$email   = $conn->real_escape_string($_POST['email']);
$query       ="INSERT into p_detail (p_brand , p_name , p_model , p_quantity  , p_price , p_mdate , p_warranty , p_barcode,email) VALUEs ('" . $p_brand . "' , '" . $p_name . "' , '" . $p_model . "' , '" . $p_quantity . "' , '" . $p_price . "' , '" . $p_mdate . "' , '" . $p_warranty . "' , '" . $p_barcode . "' , '" . $email . "')";
$success     =$conn->query($query);

if (!$success) {
	die ("couldn't enter data:".$conn->error);
}

echo "thanks for contacting us";

$conn->close();
?>