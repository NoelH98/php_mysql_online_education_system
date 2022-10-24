<?php 
	session_start();

	// variable declaration
	$fullname = "";
	$passport = "";
	$residence = "";
	$education = "";
	$reciept = "";
	$country = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
    
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

	
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	 // receive all input values from the form
		$fullname = mysqli_real_escape_string($db, $_POST['name']);
		$passport = mysqli_real_escape_string($db,$_POST['passport']);
		$residence = mysqli_real_escape_string($db,$_POST['residence']);
		$education = mysqli_real_escape_string($db,$_POST['education']);
		$reciept = mysqli_real_escape_string($db,$_POST['reciept']);
		$country = mysqli_real_escape_string($db,$_POST['country']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
	// form validation: ensure that the form is correctly filled
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($passport)) { array_push($errors, "ID or passport no is required"); }
		if (empty($residence)) { array_push($errors, "Residence is required"); }

		if (empty($education)) { array_push($errors, "Education is required"); }
		if (empty($reciept)) { array_push($errors, "Reciept no is required"); }
		if (empty($country)) { array_push($errors, "Country is required"); }
		
		$sql = "SELECT * FROM users WHERE fullname='$fullname'";
		$res_u = mysqli_query($db,$sql);
		
		$sql_2 = "SELECT * FROM users WHERE reciept='$reciept'";
		$res_2 = mysqli_query($db,$sql_2);
		
		if(mysqli_num_rows($res_u)>0){
			array_push($errors, "Sorry...Username already taken");
		}
		
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		
		if(mysqli_num_rows($res_2)>0){
			array_push($errors, "Sorry...The reciept number already used");
		}
		
	    // register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (fullname,password,passport,residence,education,reciept,country,query_status)
			          VALUES('$fullname','$password','$passport','$residence','$education','$reciept','$country','No')";
			mysqli_query($db, $query);

			$_SESSION['fullname'] = $fullname;
			$_SESSION['success'] = "You are now logged in";
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
			$query = "SELECT * FROM users WHERE fullname='$username' AND password='$password'";
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