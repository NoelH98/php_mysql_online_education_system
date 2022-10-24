<?php 
 
    session_start();

	// variable declaration
	$title = "";
	$date = "";
	$description = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
	
     // connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

	// REGISTER USER
	if (isset($_POST['submit_image'])) {
	
    // receive all input values from the form
	$title = mysqli_real_escape_string($db, $_POST['title']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
	$description = mysqli_real_escape_string($db,$_POST['postDesc']);
	
	// form validation: ensure that the form is correctly filled
    if (empty($title)) { array_push($errors, "Title is required"); }
	if (empty($description)) { array_push($errors, "Description is required"); }
	if (empty($date)) { array_push($errors, "Date is required"); }
		
    $upload_image=$_FILES["myimage"]["name"];
    $folder="/wamp/www/deba/gallery/";

     move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
	 
   
	 // register user if there are no errors in the form
	if (count($errors) == 0) {
		
	  $insert_path="INSERT INTO gallery(title,location,date,description)VALUES('$title','$folder','$date','$description')";
	  mysqli_query($db, $insert_path);

//	  $_SESSION['username'] = $username;
	  $_SESSION['success'] = "Image successfully uploaded";
	 // header('location:index.php');
	}
	}
?>