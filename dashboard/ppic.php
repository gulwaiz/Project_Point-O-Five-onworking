<?php
   SESSION_START();
   $_SESSION['username'] = "gulwaiz";
?>

<?php
   if(isset($_POST['submit'])){
	   move_uploaded_file($_FILES['file']['tmp_name'],"ppic/".$_FILES['file']['name']);
	   $con = mysqli_connect("localhost","root","9016","sey");
	   $q = mysqli_query($con,"UPDATE a_table SET profile_image = '" .$_FILES['files']['name']. "' WHERE username = '".$_SESSION['username']."'");
   }
?>

<!DOCTYPE html>
<html>
   <head>
   
   </head>
   <body>
   
      <form action="" method="post" enctype="multipart/form-data">
	        <input type="file" name="file">
	        <input type="submit" name="submit">
	  </form>
   
      <?php
	  
	  $con = mysqli_connect("localhost","root","9016","sey");
	  $q = mysqli_query($con,"SELECT * FROM a_table");
	  while ($row = mysqli_fetch_assoc($q)){
		  echo $row['username'];
		  if($row['profile_image'] == ""){
			  echo "<img width='100' height='100' src='ppic/default.png' alt='default profile pic'>";
		  } else {
			  echo "<img width='100' height='100' src='ppic/".$row['profile_image']."' alt='profile pic'>";
		  }
		  echo "<br>";
	  }  
	  ?>  
    
   </body>
</html>