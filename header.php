<head>
<meta charset="utf-8" />
<title>E-REP || Virtual reputation tracking</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="./js/jquery-2.1.1.min.js"></script>
<div id="header">
	<div id="site-branding">
		<h1>E-REP</h1>
		<h2>Your #1 reputation tracking tool</h2>
	</div>
</div>
<div id="navigation">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="app.php">App</a></li>
		<li><a href="members.php">Members</a></li>
		<?php  if(isset($_SESSION['$myusername']) == FALSE) { 
		echo '<li><a href="login.php">Login</a></li>'; 
		echo '<li><a href="registration.php">Registration</a></li>';}?>
	</ul>
</div>
</head>