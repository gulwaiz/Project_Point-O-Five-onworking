
<?php
	
	//require_once('auth.php');
		
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">

</head>

<body>

<!-- php lagi hai bhai -->

<?php
require_once('connection.php');
//$id=$_SESSION['SESS_MEMBER_ID'];
//$email=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysqli_query($bd,"SELECT * FROM p_detail");

 if(mysqli_num_rows($result3)>0){
   $row3=mysqli_fetch_array($result3);
	foreach($row3 as $row4) {
	        //echo '<p>'. $row4["p_brand"] .'</p>';
	       // echo '<p>'. $row4["p_name"] .'</p>';		 
	 }
		 
 }
/*if($result3 === FALSE) { 
    die("data not retrieved"); // TODO: better error handling
}
 
 
 
 //for ($i=0;$row3=$result3->mysql_fetch_array();$i++)
 
 
while($row3 = mysqli_fetch_assoc($result3))
{ 
$p_brand=$row3['p_brand'];
$p_name=$row3['p_name'];
$p_model=$row3['p_model'];
$p_quantity=$row3['p_quantity'];
$p_price=$row3['p_price'];
$p_mdate=$row3['p_mdate'];
$p_warranty=$row3['p_warranty'];
$p_barcode=$row3['p_barcode'];
}*/
?>

<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">product information  </td>
	
  </tr>
  <tr>
    <!--<td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>-->
    <td width="82" valign="top"><div align="left">Brand name:</div></td>
    <td width="165" valign="top"><?php echo $p_brand ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Product name:</div></td>
    <td valign="top"><?php echo $p_name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Model no.:</div></td>
    <td valign="top"><?php echo $p_model ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">quantity:</div></td>
    <td valign="top"><?php echo $p_quantity ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Price: </div></td>
    <td valign="top"><?php echo $p_price ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Manufacture date: </div></td>
    <td valign="top"><?php echo $p_mdate  ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">warranty: </div></td>
    <td valign="top"><?php echo $p_warranty ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Bar code: </div></td>
    <td valign="top"><?php echo $p_barcode ?></td>
  </tr>
</table>






























<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
</body>

</html>