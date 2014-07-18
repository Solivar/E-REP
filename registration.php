<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navigation.php'; ?>
<form ACTION="register.php" METHOD=post>
<p>Username:</p><input name="regname" type="text" size"20"></input>
<p>E-mail:</p><input name="email" type="text" size"20"></input>
<p>Password:</p><input name="regpass1" type="password" size"20"></input>
<p>Repeat Password:</p><input name="regpass2" type="password" size"20"></input>
<input type="submit" />
</form>
<?php include 'footer.php'; ?>
</body>
</html>