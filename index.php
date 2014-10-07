<?php include "./template/header.php"?>

<div id="login-container" style="display:none;" >
	<div class="content">
	<form name="form1" method="post" action="./resources/functions/checking-login.php">
	<p>
	Username:
	<input name="myusername" type="text" id="myusername">
	Password:
	<input name="mypassword" type="password" id="mypassword"> 
	<button id="reg" type="submit" name="Submit" value="Login">Login</button>
	<div id="Close-Login">X</div>
	</p>
	</form>
	</div>
</div>

<div id="registration-container" style="display:none;">
	<div class="registration-form">
		<form ACTION="./resources/functions/registration.php" METHOD="post">
			<p>Username:</p><input name="RegisteredName" type="text" size="20"></input>
			<p>E-mail:</p><input name="Email" type="text" size="20"></input>
			<p>Confirm Your Email:</p><input name="Email2" type="text" size="20"></input>
			<p>Password:</p><input name="RegisteredPassword" type="password" size="20"></input>
			<p>Repeat Password:</p><input name="RegisteredPassword2" type="password" size="20"></input>
			<input type='submit' value='Register' name='reg' />
		</form>
		<div id="Close-Registration">X</div>
	</div>
</div>
