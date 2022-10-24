<?php include('gallery.php')?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Upload Image</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Upload Image</h1><br>
   
   <form  method="post" action="galleryUpload.php" enctype="multipart/form-data">
   <?php include('errors.php')?>
   
	<p><label>Title</label><br/>
	<input type='text' name="title" value="Title"></p>
	
	<p><label>Date</label><br/>
	<input type='text' name="date" value="<?php echo date("Y-m-d");?>"></p>

	<p><label>Description</label><br/>
	<textarea name="postDesc" cols="30" rows="2" value="Desc"></textarea></p>
	
	<input type="file" name="myimage">
  
    <input type="submit" name="submit_image" class="login login-submit" value="Upload">
  </form>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>