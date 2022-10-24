<?php 
	session_start();

	// variable declaration
	$username = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
    
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

	
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	 // receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		 // register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO admins (username,password)
			          VALUES('$username','$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Successfully Updated";
			header('location:index.php');
		}
		
	}
	
	// ... 

	// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		
		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
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