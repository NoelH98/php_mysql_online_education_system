<?php 

   
  $db = mysqli_connect('localhost', 'root', '', 'debasystem');

 
  if(isset($_POST['upload'])){
	  
	   $currentDir = getcwd();
       $uploadDirectory = "/uploads/";
       $errors = [];

	   $fileExtensions = ['pdf','doc','docx'];
	   
	   $fileName = $_FILES['myfile']['name'];
	   $fileSize = $_FILES['myfile']['size'];
	   $fileTmpName = $_FILES['myfile']['tmp_name'];
	   $fileType = $_FILES['myfile']['type'];
	  
	   $fileExtension = strtolower(pathinfo($_FILES['myfile']['name'],PATHINFO_EXTENSION));
	   
	   $uploadPath = $currentDir.$uploadDirectory.basename($fileName);
	   
	   if(!in_array($fileExtension,$fileExtensions)){
		   
	   $errors[] = "This file extension is not allowed. Please upload a PDF or DOC or DOCX file";
	   }
	   
	   if($fileSize > 2000000){
       $errors[] = "This file is more than 2MB";
	   }
	   
	   if(empty($errors)){
		   $didUpload = move_uploaded_file($fileTmpName,$uploadPath);
		   $sql = "INSERT INTO uploads(filename,filetype,filesize) VALUES ('$fileName','$fileType','$fileSize')";
		   mysqli_query($db,$sql);
		   if($didUpload) {
			echo "The file".basename($fileName)."has been uploaded";
		   }else {
			echo "An error occurred somewhere. Try again";
		   } 
	   }else {
		    foreach ($errors as $error) {
			 echo $error . "These are the errors" . "\n";
		    }
	   }
	
    }

?>