<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<div id="container">
	<div class="registration-form">
		<form ACTION="./resources/functions/cgroup.php" METHOD="post">
			<p>Group name:</p><input name="groupname" type="text" size="20"></input>
			<p>Password:</p><input name="grouppass" type="password" size="20"></input>
			<p>Repeat password:</p><input name="grouppass2" type="password" size="20"></input>
			<input type='submit' value='Create' name='reg' />
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>