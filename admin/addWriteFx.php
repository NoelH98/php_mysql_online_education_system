<?php 
	session_start();

	// variable declaration
	$title = "";
	$date = "";
	$category = "";
	$type = "";
	$description = "";
	$content = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
    
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

	// REGISTER USER
	if (isset($_POST['add_post'])) {
	 // receive all input values from the form
	    $title = mysqli_real_escape_string($db, $_POST['postTitle']);
		$date = mysqli_real_escape_string($db, $_POST['date']);
		$category = mysqli_real_escape_string($db,$_POST['category']);
		$type = mysqli_real_escape_string($db,$_POST['type']);
		$description = mysqli_real_escape_string($db,$_POST['postDesc']);
		$content = mysqli_real_escape_string($db,$_POST['postCont']);
	
	  // form validation: ensure that the form is correctly filled
		if (empty($title)) { array_push($errors, "Title is required"); }
		if (empty($category)) { array_push($errors, "Category is required"); }
		if (empty($description)) { array_push($errors, "Description is required"); }
		if (empty($content)) { array_push($errors, "Content is required"); }
		if (empty($type)) {array_push($error,"Type is required");}
		if (empty($date)) { array_push($errors, "Date is required"); }

		 // register user if there are no errors in the form
		if (count($errors) == 0) {
		
		    $query = "INSERT INTO blogs (category,title,description,content,created_at,type)
			          VALUES('$category','$title','$description','$content','$date','$type')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Blog successfully created";
			header('location:index.php');
		}
	}
?>