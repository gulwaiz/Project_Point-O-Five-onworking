
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_USER_NAME']);
	unset($_SESSION['SESS_PASSWORD']);
	unset($_SESSION['SESS_EMAIL']);
?>
 
<?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","9016","sey");
                $q = mysqli_query($con,"UPDATE users SET image = '".$_FILES['file']['name']."' WHERE email = '".$_SESSION['SESS_EMAIL']."'");
        }
?>

<!DOCTYPE html>
<html>

<head><title>Register</title>
	
<meta name="description" content="">
<meta name="author" content="gulwaiz">
<meta charset="UTF-8">
<meta name="viewport" content="width=devie-width , initial-scale=1 , maximum-scale=1">
<link href="login.css" rel="stylesheet" type="text/css">

</head>

<body>

<!-- register here -->
<div id="register">
<a href="../create_account/create_account.php"><input type="submit" value="Register here" id="reg_text" ></a>
<!-- home -->
<a href="../sey/index.php"><input type="submit" value="Sey" id="home" ></a>
</div>
<!-- registration box -->
<div class="reg_box">

<!-- heading -->
<p id="form_heading">Login Now</p>

<!-- form begin -->
<form name="loginform" action="thanks.php" method="POST">

<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>

<!-- username -->
<input type="email" id="email" name="email" placeholder="EMAIL" onblur="validate_e();"><br><br>
<p id="err_e" style="display:none;"></p>

<!-- mobile no. -->
<input type="password" id="password" name="password" placeholder="PASSWORD"  ><br><br>

<div id="message">
<h6>Password must contain the following:</h6>
<p id="s_letter" class="invalid">A <b>lowercase</b>letter</p>
<p id="c_letter" class="invalid">A <b>uppercase</b>letter</p>
<p id="number" class="invalid">A <b>number</b></p>
<p id="length" class="invalid">A <b>minimum</b>8 characters</p>
</div>


<!-- log in-->
<input type="submit" value="login" id="submit">
</form>
</div>



<!--<script>

function validate_e(){
	
	var x = document.getElementById("email");
	var p = document.getElementById("err_e");
	
	p.innerHTML = "";
	p.style = "display:none;";
	
	var atpos = x.value.indexOf("@");
	var dotpos = x.value.lastIndexOf(".");
	
	if((atpos < 1) || (dotpos < atpos + 2) || (dotpos + 2 >= x.length)){
		
		p.innerHTML = "please enter a valid email id!";
		p.style  = "height:16px;font-size:14px;color:red;display:block;font-weight:600";
		x.value = "";
	}
	
}

var myInput  = document.getElementById("password");
var s_letter = document.getElementById("s_letter");
var c_letter = document.getElementById("c_letter");
var number   = document.getElementById("number");
var length   = document.getElementById("length");

//when user click on password field, show msg box

myInput.onfocus = function() {
	document.getElementById("message").style.display = "block";
}

//when user click outside the password field , show msg box

myInput.onblur = function() {
	document.getElementById("message").style.display = "none";
}

//when user type something 

myInput.onkeyup = function() {
	
	//validate small letters
	
	var lowerCaseLetters = /[a-z]/g;
	if(myInput.value.match(lowerCaseLetters)) {
		s_letter.classList.remove("invalid");
		s_letter.classList.add("valid");
	}
	else{
		s_letter.classList.remove("valid")
		s_letter.classList.add("invalid")
	}


    //validate capital letters
	
	var upperCaseLetters = /[A-Z]/g;
	if(myInput.value.match(upperCaseLetters)) {
		c_letter.classList.remove("invalid");
		c_letter.classList.add("valid");
	}
	else{
		c_letter.classList.remove("valid");
		c_letter.classList.add("invalid");
	}
	
	//validate number
	
	var numbers = /[0-9]/g;
	if(myInput.value.match(numbers)) {
		number.classList.remove("invalid");
		number.classList.add("valid");
	}
	else{
		number.classList.remove("valid");
		number.classList.add("invalid");
	}
	
	//validate length
	
	if(myInput.value.length >= 8) {
		length.classList.remove("invalid");
		length.classList.add("valid");
	}
	else{
		length.classList.remove("valid");
		length.classList.add("invalid");
	}
	
	
}

</script>-->
 
</body>

</html>