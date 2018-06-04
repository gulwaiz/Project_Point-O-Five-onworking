
<?php
	
	require_once('auth.php');
		
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title>

<meta charset="UTF-8">
<meta name="description" content="resume of mohd. gulwaiz">
<meta name="auhtor" content="Gulwaiz">
<meta name="viewport" content="width=device-width , initial-scale=1 , maximum-scale=1">
<link href="style.css" rel="stylesheet" style="text/css">
<link href="product_entry.css" rel="stylesheet" style="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


<?php
require_once('connection.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$email=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysqli_query($bd,"SELECT * FROM a_table where mem_id='$id'");
 
if($result3 === FALSE) { 
    die("data not retrieved"); // TODO: better error handling
}
 
while($row3 = mysqli_fetch_array($result3))
{ 
$username=$row3['username'];
$email=$row3['email'];
$password=$row3['password'];
$mobnum=$row3['mobnum'];
/* $dob=$row3['dob'];
$username=$row3['username'];
$gender=$row3['gender']; */
}
?>

<?php
/* mysql_connect("localhost","root","9016");
mysql_select_dB("sey");
if(isset($_POST["submit"])){
$filename = $_FILES['p_detail']['img_name'];
$tmpname = $_FILES['p_detail']['tmp_name'];
$filetype = $_FILES['p_detail']['type'];

for($i=0; $i<=count($tmpname)-1; $i++){

$img_name = addslashes($filename[$i]);
$tmp = addslashes(file_get_contents($tmpname[$i]));
mysql_query("Insert into p_detail(img_name,image) values('$img_name','$tmp')");

}
} 
 */ 
//display
 /* $res = mysql_query("SELECT * FROM p_detail");
while($row = mysql_fetch_array($res)){
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />';
echo "<br />";
}  
 */ ?>

<!-- introduction column-->

<div id="intro">
<img class="dp" src="gulwaiz.jpg" alt="avatar">
<h2 class="dpname"><?php echo $username?></h2>

<ul>          

<a href="../dashboard/index.php"><li class="fa fa-home" ><h3  class="dashboard">Dashboard</h3></li></a><br><br>

<a href="#"><li class="fa fa-user" ><h3  class="profile">Profile</h3></li></a><br><br>

<a href="#"><li class="fa fa-gear" ><h3  class="settings">Settings</h3></li></a><br><br>

<a href="#"><li class="fa fa-credit-card" ><h3  class="payments">Payments</h3></li></a><br><br>

<a href="#"><li class="fa fa-envelope" ><h3  class="envelope">Messages</h3></li></a><br><br>

<a href="../product/index.php"><li class="fa fa-plus" ><h3  class="plus">Add product</h3></li></a><br><br>

<a href="#"><li class="fa fa-history" ><h3  class="history">History</h3></li></a><br>

</ul>          

<hr style="width:80%;">

<ul>
<a href="../login/login.php"><li class="fa fa-sign-out" ><h3  class="signout">Sign out</h3></li></a><br>
</ul>
<!-- <ul>

<li>
<i class="fa fa-asterisk"></i><h2 class="text-style info-align">Skills</h2>
</li>

<li>
<h4 class="text-style skills-align">Adobe Photoshop</h4>
<div class="per-bar-bottom"></div>
<div class="per-bar-above per90 text-style">90%</div>
</li>

<li>
<h4 class="text-style skills-align">Adobe Illustrator</h4>
<div class="per-bar-bottom"></div>
<div class="per-bar-above per80 text-style">80%</div>
</li>



</ul>
 -->		  
</div>

<!-- dashboard column -->
<!--
<div class="up_mid_box">

<h1 class="heading">Dashboard</h1>	

<h3 class="sel_pro_txt">Select product</h3>
<select name="product" value="" id="product"> 
<option value="rest"></option>


<select name="product" value="product" id="product">
<option value="please select">please select
<?php //include 'dropdown.php'; ?></option>

</select>


<!--</select>

</div>
-->
<div>

<!-- details -->
<div id="box_d">
<div id="box">

<!-- heading -->
<p id="heading">Please Enter Your Product Details</p>

<!-- form begin-->
<form action="thanks.php" enctype="multipart/form-data" method="POST">
<ul>

<li>
<p class="text_style">Product Brand</p>
<input type="text" id="p_brand" name="p_brand" class="list_stye" required >
</li>

<li>
<p class="text_style">Product Name</p>
<input type="text" id="p_name" name="p_name" class="list_stye" required >
</li>

<li>
<p class="text_style">Product Model</p>
<input type="text" id="p_model" name="p_model" class="list_stye" required >
</li>

<li>
<p class="text_style">Net Quantity</p>
<input type="text" id="p_quantity" name="p_quantity" class="list_stye" required >
</li>

</ul>

<br><br><br><br><br><br><br><br>

<ul>

<li>
<p class="text_style">MRP</p>
<input type="text" id="p_price" name="p_price" class="list_stye" required >
</li>

<li>
<p class="text_style">Manufactured Date</p>
<input type="text" id="p_mdate" name="p_mdate" class="list_stye" required >
</li>

<li>
<p class="text_style">Warranty</p>
<input type="text" id="p_warranty" name="p_warranty" class="list_stye" required >
</li>

<li>
<p class="text_style">Bar Code</p>
<input type="text" id="p_barcode" name="p_barcode" class="list_stye" required >
</li>

<li style="display:none;">
<p class="text_style"  >E-mail</p>
<input type="email" id="email" name="email" value="<?php echo $email; ?>" class="list_stye" >
</li>

<li>
<p class="text_style">category</p>
<input type="text" id="category" name="category" class="list_stye" required >
</li>

<li >
<p class="text_style">Image</p>
<input multiple="" type="file" id="image" name="img[]" class="list_style" required >
</li>

<li >
<p class="text_style">Image</p>
<input multiple="" type="file" id="image_1" name="img[]" class="list_style" required >
</li>

<li >
<p class="text_style">Image</p>
<input multiple="" type="file" id="image_2" name="img[]" class="list_style" required >
</li>



</ul>

<input type="submit" value="SUBMIT DETAILS" id="submit" name="submit">

</form>

</div>

</div>



</div>

</body>

</html>