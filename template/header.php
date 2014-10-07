<?php 
if (isset($_SESSION['LoggedIn'])) {
	$LoggedIn = True;
}
else { $LoggedIn = False;}
?>
<head>
<meta charset="utf-8" />
<title>E-REP || Virtual reputation tracking</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script src="./js/jquery-2.1.1.min.js"></script>
<script src="./js/base_functions.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<div id="header">
	<div id="site-branding">
		<h1>E-REP</h1>
		<h2>Your #1 reputation tracking tool</h2>
	</div>
</div>

<div id="navigation">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="app/index.php">App</a></li>
		<li><a href="groups.php">Groups</a></li>
		<?php if($LoggedIn == False) { 
		echo '<li><button id="login">Login</button></a></li>'; 
		echo '<li><a href="registration.php">Registration</a></li>';}?>
		<?php if($LoggedIn == True) { 
		echo '<li><a href="resources/functions/logout.php">Logout</a></li>';}?>
	</ul>
</div>
<script>
$(function(){
$("#Close-Login").click(function(){
  $("#container").hide();
});
$("#login").click(function(){
  $("#container").show("slow");
});
});
</script>