<?php

session_start();

require 'connection.php';

$conn     = connect();
$username = $conn->real_escape_string($_POST['username']);
$email    = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$mobnum   = $conn->real_escape_string($_POST['mobnum']);

$filename = $_FILES['img']['name'];
$tmpname = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];

$name = addslashes($filename[0]);
$tmp = addslashes(file_get_contents($tmpname[$i]));



$query    = "INSERT into a_table (username , email , password , mobnum , name , profile_image ) VALUES ('" . $username . "' , '" . $email . "' , '" . $password . "' , '" . $mobnum . "' , '" . $name . "' , '" . $tmp . "' )";
$success  = $conn->query($query);

if (!$success) {
	die ("couldn't enter data:".$conn->error);
}

//echo "thanks for contacting us" . $_POST['name'] .  "<br>";

header("location:../thanks_sub/thanks_reg.php");

$conn->close();
?>

