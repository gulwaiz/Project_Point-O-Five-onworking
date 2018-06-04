
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">








</head>
<?php //include('header.php'); ?>	
<body>
<script>
function showUser(str) {
	//alert("hello");
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","gettingdetails.php?q="+str,true);
  xmlhttp.send();
}
</script>


<?php
require_once('connection.php');
$id=$_SESSION['SESS_MEMBER_ID'];
//$email=$_SESSION['SESS_MEMBER_ID'];

// $dbname = "sey";
$result3 = mysqli_query($bd,"SELECT * FROM a_table where mem_id='$id'");
 
if($result3 === FALSE) { 
    die("data not retrieved"); // TODO: better error handling
}
 
//while($row3 = mysqli_fetch_array($result3));
$row3 = mysqli_fetch_array($result3);
	
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


<!-- upload dp -->

<div class="upload_dp">
<form action="#" enctype="multipart/form-data" method="post" id="display">
<input multiple="" name="img[]" type="file" /><br><br>
<input name="submit" type="submit" />
</form>


</div>

<?php

mysql_connect("localhost","root","9016");
mysql_select_dB("sey");
if(isset($_POST["submit"])){
$filename = $_FILES['img']['name'];
$tmpname = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
for($i=0; $i<=count($tmpname)-1; $i++){

$name = addslashes($filename[$i]);
$tmp = addslashes(file_get_contents($tmpname[$i]));
mysql_query("update a_table set profile_image = '$tmp' , name = '$name' where mem_id='$id'");

}
}


?>



<div id="intro">
<!--img class="dp" src="-->
<?php 


                      // $con = mysqli_connect("localhost","root","9016","sey");
                        //$query = mysqli_query($con,"SELECT * FROM a_table where mem_id = '$id' ");
						//$result = mysql_query($query) or die (mysql_error());
                       //while($row = mysqli_fetch_assoc($result)){
						  //$row = mysqli_fetch_assoc($query);
                                //echo $row3['email'];
                                if($row3['profile_image'] == ""){
                                        echo "<img  height='100' width='100' src='ppic/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img  alt='main pic' height='auto' width='273' src=\"data:image/jpeg;base64,".base64_encode($row3['profile_image'])."\" />";
                                }
                                echo "<br>";
                        



?> 





		
<h2 class="dpname"><?php echo $username?></h2>

<ul>          

<a href="#"><li class="fa fa-home" ><h3  class="dashboard">Dashboard</h3></li></a><br><br>

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

<div class="up_mid_box">
 
<h1 class="heading">Dashboard</h1>	

<h3 class="sel_pro_txt">Select product</h3>
<!--<select name="product" value="" id="product"> 
<option value="rest"></option>-->


<select name="product" value="product" onchange='showUser(this.value)' id="product">
<option value="please select" >please select
<?php include 'dropdown.php'; ?></option>

</select>


<!--</select>-->
<div id="txtHint"></div>
</div>



</body>

</html>