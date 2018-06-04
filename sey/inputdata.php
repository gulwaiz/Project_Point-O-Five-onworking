<?php

session_start();

require 'connection_c.php';
$conn         = connect();
$name         = $conn->real_escape_string($_POST['name']);
$mobnum       = $conn->real_escape_string($_POST['mobnum']);
$email        = $conn->real_escape_string($_POST['email']);
$message      = $conn->real_escape_string($_POST['message']); 
$query        ="INSERT into intouch (name,mobnum,email,message) VALUES ('" . $name . "' , '" . $mobnum . "' , '" . $email . "' , '" . $message . "' )";
$success      =$conn->query($query);

if (!$success){
	die ("couldn't enter data: ".$conn->error);
	
}

		header("location: contact.php");

$conn->close();
?>