<?php include('server.php')?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Unicat project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User registration</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

  <link rel="stylesheet" href="../csss/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Register</h1><br>
  <form method="post" action="reg.php">
  <?php include('errors.php')?>
  	<input type="text" name="name" placeholder="Fullname">
    <input type="password" name="password_1" placeholder="Password">
	<input type="password" name="password_2" placeholder="Confirm Password">
	<input type="text" name="passport" placeholder="ID/Passport number">
	<input type="text" name="residence" placeholder="Current residence">
	<input type="text" name="education" placeholder="Level of education">
	<input type="text" name="reciept" placeholder="Reciept number">
	
	 <div class="wrap-input100 validate-input" data-validate="Nationality is required">
	 <span class="label-input100">Country</span>
     <select size="1" name="country">
						  <option> </option>
						  <option>Afghanistan</option>
						  <option>Albania</option>
						  <option>Algeria</option>
						  <option>Andorra</option>
						  <option>Angola</option>
						  <option>Antigua and Barbuda</option>
						  <option>Argentina</option>
						  <option>Armenia</option>
						  <option>Australia</option>
						  <option>Austria</option>
						  <option>Azerbaijan</option>
						  <option>Bahamas</option>
						  <option>Bahrain</option>
						  <option>Bangladesh</option>
						  <option>Barbados</option>
						  <option>Belarus</option>
						  <option>Belgium</option>
						  <option>Belize</option>
						  <option>Benin</option>
						  <option>Bhutan</option>
						  <option>Bolivia</option>
						  <option>Bosnia and Herzegovina</option>
						  <option>Botswana</option>
						  <option>Brazil</option>
						  <option>Brunei</option>
						  <option>Bulgaria</option>
						  <option>Burkina Faso</option>
						  <option>Burundi</option>
						  <option>Cape Verde</option>
						  <option>Cambodia</option>
						  <option>Cameroon</option>
						  <option>Canada</option>
						  <option>Central African Repulic</option>
						  <option>Chad</option>
						  <option>Chile</option>
						  <option>China</option>
						  <option>Colombia</option>
						  <option>Comoros</option>
						  <option>Congo DRC</option>
						  <option>Republic of Congo</option>
						  <option>Costa Rica</option>
						  <option>Cote d'Ivoire</option>
						  <option>Croatia</option>
						  <option>Cuba</option>
						  <option>Cyprus</option>
						  <option>Czech Republic</option>
						  <option>Denmark</option>
						  <option>Djibouti</option>
						  <option>Dominica</option>
						  <option>Dominican Republic</option>
						  <option>Ecuador</option>
						  <option>Egypt</option>
						  <option>El Salvador</option>
						  <option>Equatorial Guinea</option>
						  <option>Eritrea</option>
						  <option>Estonia</option>
						  <option>Eswatini</option>
						  <option>Ethiopia</option>
						  <option>Fiji</option>
						  <option>Finland</option>
						  <option>France</option>
						  <option>Gabon</option>
						  <option>Gambia</option>
						  <option>Georgia</option>
						  <option>Germany</option>
						  <option>Ghana</option>
						  <option>Greece</option>
						  <option>Grenada</option>
						  <option>Guatemala</option>
						  <option>Guinea</option>
						  <option>Guinea Bissau</option>
						  <option>Guyana</option>
						  <option>Haiti</option>
						  <option>Hondurus</option>
						  <option>Hungary</option>
						  <option>Iceland</option>
						  <option>India</option>
						  <option>Indonesia</option>
						  <option>Iran</option>
						  <option>Iraq</option>
						  <option>Ireland</option>
						  <option>Israel</option>
						  <option>Italy</option>
						  <option>Jamaica</option>
						  <option>Japan</option>
						  <option>Jordan</option>
						  <option>Kazakhstan</option>
			              <option>Kenya</option>
						  <option>Kiribati</option>
						  <option>Kosovo</option>
						  <option>Kuwait</option>
						  <option>Kyrgyzstan</option>
						  <option>Laos</option>
						  <option>Latvia</option>
						  <option>Lebanon</option>
						  <option>Lesotho</option>
						  <option>Liberia</option>
						  <option>Libya</option>
						  <option>Liechtenstein</option>
						  <option>Lithuania</option>
						  <option>Luxembourd</option>
						  <option>Macedonia</option>
						  <option>Madagascar</option>
						  <option>Malawi</option>
						  <option>Malaysia</option>
						  <option>Maldives</option>
						  <option>Mali</option>
						  <option>Malta</option>
						  <option>Marshall Islands</option>
						  <option>Mauritania</option>
						  <option>Mauritius</option>
						  <option>Mexico</option>
						  <option>Micronesia</option>
						  <option>Moldova</option>
						  <option>Monaco</option>
						  <option>Mongolia</option>
						  <option>Montenegro</option>
						  <option>Morocco</option>
						  <option>Mozambique</option>
						  <option>Myanmar</option>
						  <option>Namibia</option>
						  <option>Nauru</option>
						  <option>Nepal</option>
						  <option>Netherlands</option>
						  <option>New Zealand</option>
						  <option>Nicaragua</option>
						  <option>Niger</option>
						  <option>Nigeria</option>
						  <option>North Korea</option>
						  <option>Norway</option>
						  <option>Oman</option>
						  <option>Pakistan</option>
						  <option>Palau</option>
						  <option>Palestine</option>
						  <option>Panama</option>
						  <option>Papau New Guinea</option>
						  <option>Paraguay</option>
						  <option>Peru</option>
						  <option>Philippines</option>
						  <option>Poland</option>
						  <option>Portugal</option>
						  <option>Qatar</option>
						  <option>Romania</option>
						  <option>Russia</option>
						  <option>Rwanda</option>
						  <option>Saint Kitts and Nevis</option>
						  <option>Saint Lucia</option>
						  <option>Saint Vicent and the Grenadines</option>
						  <option>Samoa</option>
						  <option>San Marino</option>
						  <option>Sao Tome and Principe</option>
						  <option>Saudi Arabia</option>
						  <option>Senegal</option>
						  <option>Serbia</option>
						  <option>Seychelles</option>
						  <option>Sierra Leone</option>
						  <option>Singapore</option>
						  <option>Slovakia</option>
						  <option>Slovenia</option>
						  <option>Solomon Islands</option>
						  <option>Somalia</option>
						  <option>South Africa</option>
						  <option>South Korea</option>
						  <option>South Sudan</option>
						  <option>Spain</option>
						  <option>Sri Lanka</option>
						  <option>Sudan</option>
						  <option>Suriname</option>
						  <option>Sweden</option>
						  <option>Switzerland</option>
						  <option>Syria</option>
						  <option>Taiwan</option>
						  <option>Tajikistan</option>
			              <option>Tanzania</option>
						  <option>Thailand</option>
						  <option>Timor-Leste</option>
						  <option>Togo</option>
						  <option>Tongo</option>
						  <option>Trinidad and Tobago</option>
						  <option>Tunisia</option>
						  <option>Turkey</option>
						  <option>Turkmenistan</option>
						  <option>Tuvalu</option>
						  <option>Uganda</option>
						  <option>Ukraine</option>
						  <option>United Arab Emirates</option>
						  <option>United Kingdom</option>
						  <option>United States of America</option>
						  <option>Uruguay</option>
						  <option>Uzbekistan</option>
						  <option>Vanuatu</option>
						  <option>Vatican City</option>
						  <option>Venezuela</option>
						  <option>Vietnam</option>
						  <option>Yemen</option>
						  <option>Zambia</option>
						  <option>Zimbabwe</option>
	</select>
	<span class="focus-input100"></span>
    </div>
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