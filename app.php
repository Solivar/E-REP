<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<div id="container">
	<div class="content">
		<p>This is the application page</p>
			<p>Welcome <?php echo $_SESSION['myID'] . ' ' . $_SESSION['myusername']; ?></p>
		<p>
		<?php 
			//echo '<a href="http://localhost/E-REP/profile.php?username=' . $_SESSION['myID'] . '&submit=View+Profile">' . 'My Profile' . '</a>'
			echo '<a href="profile.php?username=' . $_SESSION['myusername'] . '&submit=View+Profile">' . 'My Profile' . '</a>';
		?>
		</p>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>