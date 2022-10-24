<?php include('addWriteFx.php')?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Write Blog</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Write Blog</h1><br>
   
   <form  method="post" action="addWrite.php">
   <?php include('errors.php')?>
   <span class="label-input100">Category</span>
     <select size="1" name="category" value="<?php echo $category; ?>" >
	 <option>--Please Select--</option>
     <option>Personal Development</option>
     <option>Financial Education</option>
	 <option>BI</option>
	</select>
	
	<p><label>Date</label><br/>
	<input type='text' name="date" value="<?php echo date("Y-m-d");?>"></p>
	
	<p><label>Title</label><br/>
	<input type='text' name="postTitle" value="Title"></p>
	
	<p><label>Description</label><br/>
	<textarea name="postDesc" cols="30" rows="5" value="Title"></textarea></p>
   
   
	<span class="label-input100">Type</span>
     <select size="1" name="type" value="<?php echo $type; ?>" >
	 <option>--Please Select--</option>
     <option>General </option>
     <option>Introductory</option>
	 </select>
	
   
    <p><label>Content</label><br />
	<textarea name="postCont" cols="30" rows="10" value="Title"></textarea></p>
   
    <input type="submit" name="add_post" class="login login-submit" value="Publish">
  </form>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>