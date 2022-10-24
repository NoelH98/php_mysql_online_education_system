<?php 

  	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'debasystem');

    try{
	   $stmt = $db->query("SELECT id,title,description,created_at FROM blogs WHERE category=''ORDER BY id DESC");
    }




?>