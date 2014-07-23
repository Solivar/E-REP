<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<div id="container">
	<div class="content">
<?php
//check for a form submission
	$con = mysqli_connect("127.0.0.1","root","","erep");
if(isset($_GET['username'])) {
	$username = $_GET['username'];			// username typed in the search menu
	$userquery = mysqli_query($con, "SELECT * FROM user WHERE username='$username'") or die("The query couldn't be processed");

	if(mysqli_num_rows($userquery) != 1) {
		die("That username could not be found!");
	}
	while($row = mysqli_fetch_array($userquery, MYSQL_ASSOC)) {
		$user_id = $row['id'];
		$user_name = $row['username'];		// username found in the database
		$user_email = $row['email'];
	} if($username != $user_name) {
		die("There has been a fatal error. Please try again");
	}
	
	echo '<h2>User ' . $user_name . ' user-profile</h2><br />';
	echo '<p>User ID: ' . $user_id . '</p>';
	echo '<p>Username: ' . $user_name . '</p>';
	echo '<p>Email: ' . $user_email . '</p>';

	
// this part shows the profile of currently logged in user
// s stands for session
} else {

	$s_username = $_SESSION['myusername'];		// username of the currently logged in user
	$profile_query = mysqli_query($con, "SELECT * FROM user where username='$s_username' ") or die("The query couldn't be processed");
	
	if(mysqli_num_rows($profile_query) != 1 ) {
		die("Couldn't find your profile");
	}
	
	while($row = mysqli_fetch_array($profile_query, MYSQL_ASSOC)) {
		$s_user_id = $row['id'];
		$s_user_name = $row['username'];			// username found in the database
		$s_user_email = $row['email'];
	} 
	
	if($s_username != $s_user_name) {
		die("There has been a fatal error. Please try again");
	}

	echo '<h2>User ' . $s_user_name . ' user-profile</h2><br />';
	echo '<p>User ID: ' . $s_user_id . '</p>';
	echo '<p>Username: ' . $s_user_name . '</p>';
	echo '<p>Email: ' . $s_user_email . '</p>';
	

}
	
?>
	</div>
	<div class="content">
		<form action="./resources/functions/add_profile_comment.php" method="post">
			<table>
				<tr>
					<td>From</td><td><?php echo $_SESSION['myusername']; ?><input type="hidden" name="sender_id" value="<?php echo $_SESSION['myusername']; ?>" /></td>
					<td>To</td>
					<td>
						<?php if(isset($_GET['username'])) echo $_GET['username']; else echo $_SESSION['myusername']; ?>
						<input type="hidden" name="receiver_id" value="<?php if(isset($_GET['username'])) echo $_GET['username']; else echo $_SESSION['myusername']; ?>" />
					</td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input type="text" name="comment_title" />
				</tr>
				<tr>
					<td>Your comment</td>
					<td><textarea name="comment_content"></textarea></td>
				</tr>
				<tr>
					<td>Last step</td>
					<td><input type="submit" name="submit_comment" value="Submit" /></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="content">
		<?php
			if(isset($_GET['username']))	{
				$username = $_GET['username'];
				$comment_query = mysqli_query($con, "SELECT * FROM profile_comments where receiver_id='$username' ") or die("The comment query couldn't be processed");
				
				while($row = mysqli_fetch_array($comment_query)) {
				
					$comment_title = $row['title'];
					$comment_content = $row['content'];
					
					echo 'Title: ' . $comment_title . '<br />';
					echo 'Comment: ' . $comment_content . '<br />';
				}
				
			} else {
				$s_username = $_SESSION['myusername'];
				$comment_query = mysqli_query($con, "SELECT * FROM profile_comments where receiver_id='$s_username' ") or die("The comment query couldn't be processed");
				
				while($row = mysqli_fetch_array($comment_query)) {
					$comment_title = $row['title'];
					$comment_content = $row['content'];
					
					echo 'Title: ' . $comment_title . '<br />';
					echo 'Comment: ' . $comment_content . '<br />';
				}
			}
		?>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>