<?php

session_start();

require 'connection.php';
$conn         = connect();
$firstname    = $conn->real_escape_string($_POST['firstname']);
$lastname     = $conn->real_escape_string($_POST['lastname']);
$fathername   = $conn->real_escape_string($_POST['fathername']);
$password     = $conn->real_escape_string($_POST['password']);
$fathermobile = $conn->real_escape_string($_POST['fathermobile']);
$email        = $conn->real_escape_string($_POST['email']);
$address      = $conn->real_escape_string($_POST['address']);
$course       = $conn->real_escape_string($_POST['course']);
$gender       = $conn->real_escape_string($_POST['gender']);
$hobbies      = $conn->real_escape_string($_POST['hobbies']); 
$query        ="INSERT into r_form (firstname,lastname,fathername,password,fathermobile,email,address,course,gender,hobbies) VALUES ('" . $firstname . "' , '" . $lastname . "' , '" . $fathername . "' , '" . $password . "' , '" . $fathermobile . "' , '" . $email . "' , '" . $address . "' , '" . $course . "' , '" . $gender . "' , '" . $hobbies . "' )";
$success      =$conn->query($query);

if (!$success){
	die ("couldn't enter data: ".$conn->error);
	
}



echo "Thanks for contacting us " . $_POST['firstname'] . "<br>";

$conn->close();
?>