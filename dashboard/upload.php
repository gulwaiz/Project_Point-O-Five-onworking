<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
move_uploaded_file($_FILES["image"]["tmp_name"],"profile_image/" . $_FILES["image"]["name"]);			
$profile_image = $_FILES["image"]["name"];
//$fname=$_POST['first_name'];
// $lname=$_POST['last_name'];
// $contact_number=$_POST['contact_number'];


//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO a_table (profile_image) VALUES ('$profile_image')";

//header("location: index.php");
$conn->exec($sql);
//echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
// }
}
// }
?>