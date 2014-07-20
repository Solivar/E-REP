<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<div id="container">
	<div class="content">
<?php
//check for a form submission

if(isset($_GET['username'])) {
	$username = $_GET['username'];
	$con = mysqli_connect("127.0.0.1","root","","erep");
	$userquery = mysqli_query($con, "SELECT * FROM user WHERE username='$username'") or die("The query couldn't be processed");

	if(mysqli_num_rows($userquery) != 1) {
		die("That username could not be found!");
	}
	while($row = mysqli_fetch_array($userquery, MYSQL_ASSOC)) {
		$user_id = $row['id'];
		$user_name = $row['username'];
		$user_email = $row['email'];
	} if($username != $user_name) {
		die("There has been a fatal error. Please try again");
	}
	
?>
	
	<h2><?php echo $user_name; ?> user-profile</h2><br />
	<p>ID:<?php echo $user_id?></p>
	<p>Username:<?php echo $user_name ?></p>
	<p>Email:<?php echo $user_email ?></p>
	
<?php
} else die("You need to specify a username!");

?>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>