<?php include('updateFx2.php'); ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Approve user</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Approve user</h1><br>
  <form method="post" action="">
  <?php include('errors.php'); ?>
    <?php
	        $dbconnection = new mysqli("localhost", "root", "","debasystem") or die ("check your server connection.");
		    $sql = "SELECT fullname FROM feusers WHERE query_status='No'";
		    $result = $dbconnection->query($sql);
		    
    ?> 
	<span class="label-input100">user name</span>
	<select class ="required-entry" name="student" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">	
	  <option value="">--Please Select--</option>
	  <?php if ($result->num_rows > 0) { ?>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <option value="<?php echo $row['fullname']?>"><?php echo $row['fullname']; ?></option>
      <?php } ?>		
      <?php } ?>
    </select>
	
	 <span class="label-input100">Approve User</span>
     <select size="1" name="answer" value="<?php echo $answer; ?>">
	 <option>--Please Select--</option>
     <option>Yes</option>
     <option>No</option>
	 </select> 
    <input type="submit" name="update_query" class="login login-submit" value="Approve">
  </form>

</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>