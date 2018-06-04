<?php

session_start();

require 'connection_p.php';
$conn        = connect();
$p_brand     = $conn->real_escape_string($_POST['p_brand']);
$p_name      = $conn->real_escape_string($_POST['p_name']);
$p_model     = $conn->real_escape_string($_POST['p_model']);
$p_quantity  = $conn->real_escape_string($_POST['p_quantity']);
$p_price     = $conn->real_escape_string($_POST['p_price']);
$p_mdate     = $conn->real_escape_string($_POST['p_mdate']);
$p_warranty  = $conn->real_escape_string($_POST['p_warranty']);
$p_barcode   = $conn->real_escape_string($_POST['p_barcode']);
$email       = $conn->real_escape_string($_POST['email']);
$category    = $conn->real_escape_string($_POST['category']);
//$image       = $conn->real_escape_string($_POST['image']);

//mysql_connect("localhost","root","9016");
//mysql_select_dB("sey");
/* if(isset($_POST["submit"])){*/
$filename = $_FILES['img']['name'];
$tmpname = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];

//for($i=0; $i<=count($tmpname)-1; $i++){

//$img_name = addslashes($filename[$i]);
$img_name = addslashes($filename[0]);
//$tmp = addslashes(file_get_contents($tmpname[$i]));
$tmp1 = addslashes(file_get_contents($tmpname[0]));
$tmp2 = addslashes(file_get_contents($tmpname[1]));
$tmp3 = addslashes(file_get_contents($tmpname[2]));
//mysql_query("Insert into p_detail(img_name,image) values('$img_name','$tmp')");
 




$query       ="INSERT into p_detail (p_brand , p_name , p_model , p_quantity  , p_price , p_mdate , p_warranty , p_barcode , email  , category , img_name , image, image_1, image_2 ) VALUES ('" .$p_brand . "' , '" . $p_name . "' , '" . $p_model . "' , '" . $p_quantity . "' , '" . $p_price . "' , '" . $p_mdate . "' , '" . $p_warranty . "' , '" . $p_barcode . "' , '" . $email . "'  , '" . $category . "' , '" . $img_name . "' , '" . $tmp1 . "' , '" . $tmp2 . "' , '" . $tmp3 . "')";
$success     =$conn->query($query);

if (!$success) {
	die ("couldn't enter data:".$conn->error);
}
//}
header("location:../thanks_sub/index.php");

//echo "thanks for contacting us";

$conn->close();

?>