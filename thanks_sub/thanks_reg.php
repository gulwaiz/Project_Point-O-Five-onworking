<html>
<head>
<title>Thanks</title>

<style>

body{
   background-size:cover;
   background-image:url("../images/bg5.jpeg");
}


p{
  position:relative;
  margin:auto;
  padding:5px;
  text-align:center;
  font-family:calibri;
  font-size:2em;
  top:35px;
}

.thanks{
    position:relative;
    background-color:#d3d3d3;
	width:60%;
	height:30%;
	margin-left:auto;
	margin-right:auto;
	border-radius:10px;
	top:35%;

	
}

a #submit{
	position:relative;
	height:1.5em;
	width:10em;
	font-family:calibri;
	font-size:20px;
	color:#fff;
	background-color:#0574AB;
	border:none;
	border-radius:0.3em;
    display:block;
	margin-left:auto;
	margin-right:auto;
	top:3em;
	text-decoration:none;
}

@media only screen and (max-width:500px){
	
.thanks{
    position:absolute;
    background-color:#d3d3d3;
	width:100%;
	height:40%;
	border-radius:10px;
	top:35%;
    left:0%;

	}	
	
}


</style>

</head>

<body>
<div class="thanks">
<p>Thanks for registering with us, </p>
<!--<p>We will display your product once we verify you.</p> -->
<a href="../login/login.php"><input type="submit" value="login to continue" id="submit" ></a>
</div>



</body>

</html>