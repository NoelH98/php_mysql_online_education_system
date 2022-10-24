<?php include('editCredFx.php')?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Edit Credentials</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Update</h1><br>
  <form method="post" action="editCred.php">
     <?php include('errors.php')?>
  	<input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="reg_user" class="login login-submit" value="Update">
  </form>
  <div class="login-help">
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>