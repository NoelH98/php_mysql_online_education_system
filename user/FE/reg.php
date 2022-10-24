<?php include('server.php')?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>User registration</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

  <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Register</h1><br>
  <form method="post" action="reg.php">
  <?php include('errors.php')?>
	<input type="text" name="reciept" placeholder="Reciept number">
	<p> </p>
    <input type="submit" name="reg_user" class="login login-submit" value="Register">
  </form>
    <div class="login-help">
    <a href="login.php">Login</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>