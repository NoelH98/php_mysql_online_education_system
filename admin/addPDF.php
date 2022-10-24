<?php include('upload.php') ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Upload Blog</title>
  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
  <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Upload Blog</h1><br>
   
   <form  method="post" action="addPDF.php" enctype="multipart/form-data">
     <label for="file">Filename:</label>
     <input type="file" name="myfile" id="myfile" accept="application/pdf"><br/>
     <input type="submit" name="upload" class="login login-submit" value="Upload">
  </form>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>