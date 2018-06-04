
<?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
			  
            //echo 'Registration Success';
			echo '<meta http-equiv="refresh" content="0;url=acknowledgement.php">'; 
          }
          ?> 

<!DOCTYPE html>
<html>

<head><title>create account</title>

<link href="create_account.css" rel="stylesheet" type="text/css">

</head>

<body>



<div class="box_a">

<h6 id="heading">Create Your Account</h6>
<p id="sub_heading">All datails are mendatory</p>

<form action="thanks.php" method="POST" enctype="multipart/form-data" >

<ul>

<li>
<p class="text_	style" id="name" >Name </p>
<input type="text" name="username" id="username" placeholder="Enter full name" class="list_style" required>
</li>

<li>
<p class="text_style">Email ID</p>
<input type="email" name="email" id="email" placeholder="Enter email" class="list_style" required>
</li>

<li>
<p class="text_style">Password</p>
<input type="password" name="password" id="password" placeholder="Minimum 4 characters" class="list_style" required>
</li>

<li>
<p class="text_style">Mobile Number</p>
<input type="text" name="mobnum" id="mobnum" placeholder="10 digit mobile number" class="list_style" required>
</li>

<li>
<p class="text_style">upload your profile pic</p>
<input multiple="" type="file" name="img[]" id="profile_image"   required>
</li>


<input type="submit" value="Continue" id="submit" name="submit">

</ul>

</form>

</div>

</body>
</html>