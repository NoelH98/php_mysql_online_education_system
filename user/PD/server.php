<?php 
	session_start();

	// variable declaration
	$reciept = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
    
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

		// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$reciept = mysqli_real_escape_string($db,$_POST['reciept']);
		if (empty($reciept)) { array_push($errors, "Reciept no is required"); }
		
		$sql_2 = "SELECT * FROM pdusers WHERE reciept='$reciept'";
		$res_2 = mysqli_query($db,$sql_2);
		
		if(mysqli_num_rows($res_2)>0){
			array_push($errors, "Sorry...The reciept number already used");
		}
		
		$username =  $_SESSION['username'];
		$sql = "SELECT password,passport,residence,education,reciept,country FROM users WHERE fullname='$username'";
		$res = mysqli_query($db,$sql);
		
		$row = mysqli_fetch_array($res);
		
		$password = $row['password'];
		$passport = $row['passport'];
		$residence = $row['residence'];
		$education = $row['education'];
		$reciept2 = $row['reciept'];
		$country = $row['country'];
		
		$sql_3 = "SELECT * FROM users WHERE reciept='$reciept'";
		$res_3 = mysqli_query($db,$sql_3);
		
		if(mysqli_num_rows($res_3)>0){
			array_push($errors, "Sorry...The reciept number already used");
		}
		
		$sql_4 = "SELECT * FROM feusers WHERE reciept='$reciept'";
		$res_4 = mysqli_query($db,$sql_4);
		
		if(mysqli_num_rows($res_4)>0){
			array_push($errors, "Sorry...The reciept number already used");
		}
	
	    $sql_5 = "SELECT * FROM biusers WHERE reciept='$reciept'";
		$res_5 = mysqli_query($db,$sql_5);
		
		if(mysqli_num_rows($res_5)>0){
			array_push($errors, "Sorry...The reciept number already used");
		}
		
		 // register user if there are no errors in the form
		if (count($errors) == 0) {
	
		$query = "INSERT INTO pdusers (fullname,password,passport,residence,education,reciept,country,query_status)
			          VALUES('$username','$password','$passport','$residence','$education','$reciept','$country','No')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Please Wait for Admin Clearence";
		header('location:index.php');
		
		}
	}
	
	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM pdusers WHERE fullname='$username' AND password='$password'";
			$results = mysqli_query($db, $query) or die('Invalid query:'.mysql_error($db));

			if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location:index.php');
			}else {
			array_push($errors, "Wrong username/password combination");
			}
		}
	}
	mysqli_close($db);
?>