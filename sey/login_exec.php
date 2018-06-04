<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$category = $_POST['category'];
	//$password = $_POST['password'];
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'category missing';
		$errflag = true;
	}
	/* if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	} */
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM p_detail WHERE category='$category' ";
	$result=mysqli_query($bd, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID']  = $p_detail['id'];
			$_SESSION['SESS_FIRST_NAME'] = $p_detail['category'];
			//$_SESSION['SESS_LAST_NAME']  = $member['password'];
			session_write_close();
			header("location: shop.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'electronis not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>