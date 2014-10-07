<?php include "./template/header.php"?>

<div id="container" style="display:none;" >
	<div class="content">
	<form name="form1" method="post" action="./resources/functions/checklogin.php">
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
